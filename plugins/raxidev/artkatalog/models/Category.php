<?php namespace RaxiDev\ArtKatalog\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artkatalog_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
