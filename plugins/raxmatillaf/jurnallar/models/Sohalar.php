<?php namespace RaxmatillaF\Jurnallar\Models;

use Model;

/**
 * Model
 */
class Sohalar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatillaf_jurnallar_sohalar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
     public $hasMany = [
           'jurnallar' => [
                 \RaxmatillaF\Jurnallar\Models\Jurnallar::class,
                'order'      => 'title desc',
                'conditions' => 'status = 1'
    ]
        ];
}
