<?php namespace Demin\Vkapi\Models;

use Model;
use VK;
use Carbon\Carbon;

/**
 * vkpost Model
 */
class Vkpost extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_vkapi_vkposts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

   // public $vkdata;

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    public function set_wall_post($post = null) {
        if(!empty($post)) {
            //$messages = "[".$post->url."|".$post->title."]". " \n " .$post->content;
            $messages = $post->title . " \n " . $post->content . " \n " . $post->url;
        } else {
            $post =  self::where('published_at', '<', Carbon::now())->where('is_published',0)->first();
            if($post) {
                $messages = $post->content;
            } else {
                return false;
            }
        }

        $data = array (
            'owner_id' => -118899369,
             'from_group' => 1,
            //'owner_id' => 96842056,
            'message' => strip_tags($messages),
            'attachments' => $post->url
        );

        $t = VK::exec('wall.post', $data);
        foreach ($t as $k) {
            if(is_numeric($k)) {
                self::where('id',$post->id)->update(['is_published'=>1]);
                return true;
            } else {
                return false;
            }
        }

    }


}