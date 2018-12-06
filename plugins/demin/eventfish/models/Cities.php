<?php namespace Demin\Eventfish\Models;

use Model;
use Redirect;

/**
 * cities Model
 */
class Cities extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_eventfish_cities';

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
    public $attachOne = [];
    public $attachMany = [];

    public function getCity($c) {
     return  $this->where('city', 'like', $c.'%')
            ->first();
    }



}