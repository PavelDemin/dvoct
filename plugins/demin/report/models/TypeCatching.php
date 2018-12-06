<?php namespace Demin\Report\Models;

use Model;

/**
 * Model
 */
class TypeCatching extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsToMany = [
        'post_report' => ['Demin\Report\Models\PostReport', 'table' => 'demin_report_post_reports']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'demin_report_type_catching';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
