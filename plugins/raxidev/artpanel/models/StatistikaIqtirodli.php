<?php namespace RaxiDev\ArtPanel\Models;

use Model;

/**
 * Model
 */
class StatistikaIqtirodli extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_statiskika_va_iqtidorli_talabalar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Files nomli polyaga repeats ni yoqish uchun
    protected $jsonable = ['talabalar', 'statistika'];

    // Agar formada surat yoki fayl yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [        
        'talaba_surati' => ['System\Models\File'],
        'icon' => ['System\Models\File'],
        'statistika_image' => ['System\Models\File'],
        'student_image' => ['System\Models\File'],
        

    ];
    
}
