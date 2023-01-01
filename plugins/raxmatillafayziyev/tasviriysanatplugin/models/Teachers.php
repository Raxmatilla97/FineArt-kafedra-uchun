<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Models;

use Model;

/**
 * Model
 */
class Teachers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatillafayziyev_tasviriysanatplugin_teachers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'avatar' => 'System\Models\File',
        'art_work_image' => 'System\Models\File',
        'resurs_yuklash' => 'System\Models\File'
    ];

    protected $jsonable = ['art_works', 'maqolalar_kitoblar'];


}
