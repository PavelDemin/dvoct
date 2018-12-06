<?php namespace Demin\Video\Models;

use Model;
use ValidationException;
/**
 * Video Model
 */
class Video extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_video_videos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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
    public $attachOne = [
        'image' => ['System\Models\File']
    ];
    public $attachMany = [];


    public static $allowedSortingOptions = [
        'title asc'  => 'Title (ascending)',
        'title desc' => 'Title (descending)',
        'created_at asc'  => 'Created (ascending)',
        'created_at desc' => 'Created (descending)',
        'updated_at asc'  => 'Updated (ascending)',
        'updated_at desc' => 'Updated (descending)',
        'published_at asc'  => 'Published (ascending)',
        'published_at desc' => 'Published (descending)'

    ];

    public function scopeListFrontEnd($query, $options)
    {
        extract(array_merge([
            'page'    => 1,
            'perPage' => 10,
            'sort'    => 'created_at',
            'search'  => '',
            'status'  => 1
        ], $options));

        $searchableFields = ['title', 'slug', 'content'];

        if ($status) {
            $query->isPublished();
        }

        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {

            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);

                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }

                list ($sortField, $sortDirection) = $parts;

                $query->orderBy($sortField, $sortDirection);
            }
        }

        $search = trim($search);

        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        return $query->paginate($perPage, $page);
    }

    public function scopeIsPublished($query)
    {
        return $query->where('published', 1);
    }

}