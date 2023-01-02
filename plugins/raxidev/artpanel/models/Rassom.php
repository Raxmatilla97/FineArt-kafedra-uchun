<?php namespace RaxiDev\ArtPanel\Models;

use Model;

/**
 * Model
 */
class Rassom extends Model
{
    use \October\Rain\Database\Traits\Validation;

    // $slugs ishlashi uchun Sluggable import qilinadi
    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_rassomlar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Agar formada surat yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [
        'rasm' => ['System\Models\File']
    ];

    // Agar slug ga avtomatik i++ son qo'shilishini istasak pastdagi metod yoziladi
    protected $slugs = ['slug' => 'fish'];

}
