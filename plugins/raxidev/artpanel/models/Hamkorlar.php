<?php namespace RaxiDev\ArtPanel\Models;

use Model;

/**
 * Model
 */
class Hamkorlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_hamkorlar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
