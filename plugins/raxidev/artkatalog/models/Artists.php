<?php namespace RaxiDev\ArtKatalog\Models;

use Model;

/**
 * Model
 */
class Artists extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    // $slugs ishlashi uchun Sluggable import qilinadi
    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artkatalog_artists';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Agar modelda biron tablitsiyaga relation ishlatish kerak bo'lsa uni shu metod orqali bajariladi
    // public $belongsTo = [
    //     'rassom' => \RaxiDev\ArtPanel\Models\Rassom::class
    // ];

    // Agar formada surat yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [
        'avatar' => ['System\Models\File']
    ];

    // Agar slug ga avtomatik i++ son qo'shilishini istasak pastdagi metod yoziladi
    protected $slugs = ['slug' => 'fish'];


}
