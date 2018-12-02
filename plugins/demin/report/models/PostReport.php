<?php namespace Demin\Report\Models;

use Model;
use October\Rain\Support\Facades\Flash;
use ValidationException;
use Demin\Vkapi\Models\Vkpost;
use DB;

/**
 * PostReport Model
 */
class PostReport extends Model
{

   /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_report_post_reports';

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
    public $belongsToMany = [
        'type_catching' => [
            'Demin\Report\Models\TypeCatching',
            'table' => 'demin_report_post_reports_type_catching'
        ]
    ];
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

    public function scopeListFrontEnd($query, $options = [])
    {
        extract(array_merge([
            'page'    => 1,
            'perPage' => 9,
            'sort'    => 'published_at desc',
            'search'  => '',
            'type_catching' => "",
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

        if(!empty($type_catching)) {
            if(!is_array($type_catching)){
                $type_catching = [$type_catching];
            }

            foreach ($type_catching as $var){
                $query->whereHas('type_catching', function($q) use ($var){
                    $q->where('id', '=', $var);
                });
            }

        }

        $search = trim($search);
        echo $search;

        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        $lastPage = $query->paginate($perPage, $page)->lastPage();

        if($lastPage < $page){
            $page = 1;
        }

        return $query->paginate($perPage, $page);
    }

    public function scopeIsPublished($query) {
        return $query->where('published', 1);
    }


   /* public function afterCreate() {
        $vk = new Vkpost();
        $vk->title = $this->title;
        $vk->url = "http://dv.loc/report/" . $this->slug;
        $vk->content = $this->content;
        $vk->save();

    }*/

}