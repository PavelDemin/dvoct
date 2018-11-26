<?php namespace Xeor\Comments\Models;

use DB;
use Model;

class Comment extends Model
{
    use \October\Rain\Database\Traits\NestedTree;

    public $table = 'xeor_comments_comments';

    /**
     * Relations
     */
    public $hasMany = [
        'votes' => [
            'Xeor\Comments\Models\Vote',
        ],
    ];

    //
    // Scopes
    //

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', '=', 1);
    }

    /**
     * Lists posts for the front end
     * @param  array $options Display options
     * @return self
     */
    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'published'  => true
        ], $options));

        if ($published) {
            $query->isPublished();
        }

        /*
         * Sorting
         */
        list($sortField, $sortDirection) = [$sort, 'asc'];
        if ($sortField == 'torder') {
            $sortField = DB::raw('SUBSTRING(thread, 1, (LENGTH(thread) - 1))');
        }
        $query->orderBy($sortField, $sortDirection);

        $query->orderBy('id', 'asc');
        return $query->paginate($perPage, $page);
    }
}