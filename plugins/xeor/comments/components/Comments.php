<?php namespace Xeor\Comments\Components;

use DB;
use Log;
use Str;
use Auth;
use Input;
use Markdown;
use BackendAuth;
use Cms\Classes\ComponentBase;
use Xeor\Comments\Models\Vote;
use Xeor\Comments\Models\Comment;
use Xeor\Comments\Classes\Helper;
use Xeor\Comments\Models\Settings;

class Comments extends ComponentBase
{

    /**
     * A collection of comments to display.
     * @var Collection
     */
    public $comments;

    /**
     * Reference to the user.
     * @var Model
     */
    public $user;

    /**
     * Reply depth.
     * @var string
     */
    public $depth;

    /**
     * Page number.
     * @var string
     */
    public $pageParam;

    public $options;

    public function componentDetails()
    {
        return [
            'name' => 'xeor.comments::lang.comments.comments',
            'description' => 'xeor.comments::lang.comments.comments_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'xeor.comments::lang.settings.slug',
                'description' => 'xeor.comments::lang.settings.slug_description',
                'default' => '{{ :slug }}',
                'type' => 'string',
                'required' => true,
            ],
            'mode' => [
                'title' => 'xeor.comments::lang.settings.comments_mode',
                'description' => 'xeor.comments::lang.settings.comments_mode_description',
                'default' => '1',
                'type' => 'checkbox',
                'required' => TRUE,
                'showExternalParam' => false
            ],
            'depth' => [
                'title' => 'xeor.comments::lang.settings.depth',
                'description' => 'xeor.comments::lang.settings.depth_description',
                'default' => '0',
                'type' => 'string',
                'required' => true,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'xeor.comments::lang.settings.depth_validation_message'
            ],
            'pageNumber' => [
                'title' => 'xeor.comments::lang.settings.comments_pagination',
                'description' => 'xeor.comments::lang.settings.comments_pagination_description',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'commentsPerPage' => [
                'title' => 'xeor.comments::lang.settings.comments_per_page',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'xeor.comments::lang.settings.comments_per_page_validation',
                'default' => '10',
            ],
            'rate' => [
                'title' => 'xeor.comments::lang.settings.comments_rate_type',
                'description' => 'xeor.comments::lang.settings.comments_rate_type_description',
                'type' => 'dropdown',
                'default' => 'none',
                'required' => TRUE,
                'validationMessage' => 'xeor.comments::lang.settings.comments_rate_type_validation',
                'showExternalParam' => false
            ],
        ];
    }

    public function getRateOptions()
    {
        return [
            'none' => e(trans('xeor.comments::lang.settings.comments_rate_type_none')),
            'number' => e(trans('xeor.comments::lang.settings.comments_rate_type_number')),
            'stars' => e(trans('xeor.comments::lang.settings.comments_rate_type_fivestar'))
        ];
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
        // add some assets
        if(Settings::get('css', true)) {
            $this->addCss('assets/css/comments.css');
        }
        $this->addJs('assets/js/jquery.raty.js');
        $this->addJs('assets/js/comments.js');

        $this->prepareVars();

        if ($this->property('rate') === 'stars') {
            $this->addJs('/plugins/xeor/comments/assets/js/jquery.raty.js');
        }

        // add comments to template
        $this->comments = $this->page['comments'] = $this->loadComments();

        if (!$this->comments)
            return;

        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->comments->lastPage()) && $currentPage > 1)
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
        }
    }

    protected function prepareVars()
    {
        // get current user
        $user = self::getUser();
        // add current user to template
        $this->user = $this->page['user'] = $user;
        // add comment reply depth to template
        $this->depth = $this->page['depth'] = $this->property('depth');

        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');

        // add some options
        $options = [
            'hide-reply-form' => Settings::get('hide_reply_form', true) ? 1 : 0,
            'hide-main-form' => Settings::get('hide_main_form', true) ? 1 : 0,
            'rate' => $this->property('rate')
        ];

        $this->options = $this->page['options'] = $options;
    }

    public function onComment()
    {
        // get current user
        $user = self::getUser();
        // add current user to template
        $this->user = $this->page['user'] = $user;
        // add comment reply depth to template
        $this->depth = $this->page['depth'] = $this->property('depth');
        $this->page['level'] = post('level');
        $this->page['rate'] = $this->property('rate');

        // get current user
        $user = self::getUser();
        if($user) {
            $user_id = $user->id;
        }
        else {
            $user_id = 0; // guest
        }

        // get id of edited comment
        $id = post('id');
        if(!$id) { // create new comment

            $comment = new Comment();

            // get slug
            $cid = $this->property('slug');
            $params['cid'] = $cid;
            // get parent id
            $params['parent_id'] = $pid = post('parent_id') ? post('parent_id') : NULL;
            // get content
            $params['content'] = post('content');
            $params['user_id'] = $user_id;
            // get ip address
            $params['hostname'] = self::getHostname();
            // parse content to html
            $params['content_html'] = Markdown::parse(strip_tags(trim($params['content'])));

            // get name, mail, homepage if user is anonymous
            $params['name'] = post('name');
            $params['mail'] = post('mail');
            $params['homepage'] = post('homepage');

            // create comment
            if(isset($params['content']) && !empty($params['content'])) {
                foreach($params as $key => $val) {
                    $comment->$key = $val;
                }

                // This next section builds the thread field
                if ($comment->parent_id == 0) {
                    // This is a comment with no parent comment (depth 0): we start
                    // by retrieving the maximum thread level.
                    $max = DB::table('xeor_comments_comments')->where('cid', $cid)->max('thread');
                    // Strip the "/" from the end of the thread.
                    $max = rtrim($max, '/');
                    // We need to get the value at the correct depth.
                    $parts = explode('.', $max);
                    $firstsegment = $parts[0];
                    // Finally, build the thread field for this new comment.
                    $thread = self::int2vancode(self::vancode2int($firstsegment) + 1) . '/';
                }
                else {
                    // This is a comment with a parent comment, so increase the part of the
                    // thread value at the proper depth.

                    // Get the parent comment:
                    $parent = Comment::find($pid);
                    // Strip the "/" from the end of the parent thread.
                    $parent->thread = (string) rtrim((string) $parent->thread, '/');
                    // Get the max value in *this* thread.
                    $max = DB::table('xeor_comments_comments')->where('thread', $parent->thread)->where('cid', $cid)->max('thread');

                    if ($max == '') {
                        // First child of this parent.
                        $thread = $parent->thread . '.' . self::int2vancode(0) . '/';
                    }
                    else {
                        // Strip the "/" at the end of the thread.
                        $max = rtrim($max, '/');
                        // Get the value at the correct depth.
                        $parts = explode('.', $max);
                        $parent_depth = count(explode('.', $parent->thread));
                        $last = $parts[$parent_depth];
                        // Finally, build the thread field for this new comment.
                        $thread = $parent->thread . '.' . self::int2vancode(self::vancode2int($last) + 1) . '/';
                    }
                }

                $comment->thread = $thread;
                $comment->save();
            }
            else {
                // Log::info('');
            }
        }
        else { // update comment

            // get content
            $content = post('content');
            $params = array(
                'content' => post('content'),
                'content_html' => Markdown::parse(trim($content)),
            );
            // update content
            $comment = Comment::find($id);
            if($comment && $user->id == $comment->user_id && $user->id != 0) {
                $content = $params['content'];
                $content_html = $params['content_html'];

                $comment->content = $content;
                $comment->content_html = $content_html;

                $comment->save();

            }
            else {
                // Log::info('');
            }

        }

        if ($comment) {

            // add user name and avatar to comment
            if($user_id != 0) {
                $comment->user_avatar = $user->getAvatarThumb(64);
                $comment->user_name = $user->name;
            }

            // Set prefix and suffix to new comment
            $comment->prefix = "<div id=\"comment-$comment->id\" class=\"media comment\">\n";
            $comment->suffix = '</div>';

            //
            // Set rate values
            //
            $comment->total = 0;
            $comment->score = 0;
            $comment->voted = false;

            $this->comment = $this->page['comment'] = $comment;

        }
        else {
            // Log::info('');
        }

    }

    public function onEditComment()
    {
        // get comment id
        $id = post('id');
        // get user
        $user = self::getUser();
        // find comment
        $comment = Comment::find($id);

        // if user is author return comment content
        if(isset($user) && $user->id == $comment->user_id && $user->id != 0) {
            $res = array(
                'id' => $id,
                'content' => $comment->content
            );
            return json_encode($res);
        }
        else {
            return;
        }

    }

    public function onDeleteComment()
    {
        // get comment id
        $id = post('id');
        // get user
        $user = self::getUser();
        // find comment
        $comment = Comment::find($id);

        // if user is author delete comment
        if(isset($user) && $user->id == $comment->user_id && $user->id != 0) {
            $comment->delete();
            $helper = new Helper;
            $comments = $helper->getChildren($id);
            $comments[] = $id;
            DB::table('xeor_comments_comments')
                ->whereIn('id', $comments)
                ->delete();
            return $id;
        }
        else {
            return;
        }

    }

    /**
     * @param bool $uid
     * @return bool
     *
     * Get User.
     *
     */
    protected function getUser($uid = false) {
        $user = null;
        if (class_exists("\RainLab\User\Models\User")) {
            $user = $uid !== false ? Auth::findUserById($uid) : Auth::getUser();
            if (isset($user)) {
                $user->id = $user['attributes']['id'];
                $user->name = $user['attributes']['name'];
            }
        }
        return $user;
    }

    /**
     * @return mixed
     *
     * Get IP
     *
     */
    protected function getHostname() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $hostname = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $hostname = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $hostname = $_SERVER['REMOTE_ADDR'];
        }
        return $hostname;
    }


    /**
     * Generate vancode.
     *
     * Consists of a leading character indicating length, followed by N digits
     * with a numerical value in base 36. Vancodes can be sorted as strings
     * without messing up numerical order.
     *
     * It goes:
     * 00, 01, 02, ..., 0y, 0z,
     * 110, 111, ... , 1zy, 1zz,
     * 2100, 2101, ..., 2zzy, 2zzz,
     * 31000, 31001, ...
     */
    protected function int2vancode($i = 0) {
        $num = base_convert((int) $i, 10, 36);
        $length = strlen($num);

        return chr($length + ord('0') - 1) . $num;
    }

    /**
     * Decode vancode back to an integer.
     */
    protected function vancode2int($c = '00') {
        return base_convert(substr($c, 1), 36, 10);
    }

    /**
     * @return mixed
     *
     * Get all comments
     *
     */
    protected function loadComments()
    {
        if (!$cid = $this->property('slug'))
            return null;

        $mode = $this->property('mode');
        $page = (int) $this->property('pageNumber');
        $perPage = (int) $this->property('commentsPerPage');

        /*
         * List all the comments
         */
        $comments = Comment::where('cid', $cid)->listFrontEnd([
            'page'    => $page,
            'perPage' => $perPage > 0 ? $perPage : 99999,
            'sort'    => $this->mode ? 'torder' : 'id'
        ]);

        if (!$comments->count())
            return;

        // A counter that helps track how indented we are.
        $divs = 0;

        foreach ($comments as $key => $comment) {

            // The $divs element instructs prefix whether to add an indent div or
            // close existing divs (a negative value).
            $comment->depth = count(explode('.', $comment->thread)) - 1;
            if ($comment->depth > $divs) {
                $comment->divs = 1;
                $divs++;
            }
            else {
                $comment->divs = $comment->depth - $divs;
                while ($comment->depth < $divs) {
                    $divs--;
                }
            }
            $comments[$key] = $comment;
        }

        // The final comment must close up some hanging divs
        $comments[$key]->divs_final = $divs;

        // Prepare comments
        foreach ($comments as $key => $comment) {
            $prefix = '';
            $suffix = '';

            $is_threaded = isset($comment->divs) && $mode;
            if ($is_threaded) {
                $prefix .= $comment->divs <= 0 ? str_repeat('</div>', abs($comment->divs)) : "\n" . '<div class="indented">';
            }
            $prefix .= "<div id=\"comment-$comment->id\" class=\"media comment\">\n";

            if ($is_threaded && !empty($comment->divs_final)) {
                $suffix = str_repeat('</div>', $comment->divs_final);
            }

            $suffix .= '</div>';
            $comments[$key]->prefix = $prefix;
            $comments[$key]->suffix = $suffix;

            // Get user
            $comment_author = self::getUser($comment->user_id);
            if($comment_author) {
                // get user avatar
                $comments[$key]->user_avatar = $comment_author->getAvatarThumb(64);

                // Check if user name exist
                if(isset($comment_author->name))
                    $comments[$key]->user_name = $comment_author->name;
                else
                    $comments[$key]->user_name = '';
            }

            //
            // Set rate values
            //

            // Get total
            $comments[$key]->total = Helper::getTotal($comment->id);

            // Get score
            $comments[$key]->score = Helper::getScore($comment->id, $this->property('rate'));

            // Count user votes
            $res = Db::select('select id from xeor_comments_votes where comment_id = ? and user_id = ?', [
                $comment->id,
                $comment->user_id
            ]);
            // Check if user voted
            if (is_array($res) && !empty($res)) {
                $comments[$key]->voted = true;
            }

        }

        return $comments;
    }

    public function onVote() {
        $commentId = post('id');
        $type = post('type');
        $value = post('value');

        if ($commentId && !empty($commentId)) {

            // Get user id
            $user = self::getUser();
            $userId = $user ? $user->id : 0;

            // Get user votes
            $userVotes = Db::select('select id from xeor_comments_votes where comment_id = ? and user_id = ?', [
                $commentId,
                $userId
            ]);

            if (is_array($userVotes) && empty($userVotes)) {
                $vote = new Vote();
                $vote->comment_id = $commentId;
                $vote->value = $value;
                $vote->user_id = $userId;
                $vote->value_type = ($type == 'stars' ? 'percent' : 'points');
                $vote->vote_source = self::getHostname();
                $vote->save();
            }
            else {
                Vote::where('comment_id', $commentId)
                    ->where('user_id', $userId)
                    ->update(['value' => $value]);
            }

            return [
                'total' => Helper::getTotal($commentId),
                'score' => Helper::getScore($commentId, $type)
            ];
        }
        else {
            Log::info('Can not find comment with id: ' . $commentId);
        }
    }
}
