<?php namespace RaxiDev\ArtPanel\Models;

use Model;

/**
 * Model
 */
class ElektronQollanmalar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_elektron_qollanmalar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
