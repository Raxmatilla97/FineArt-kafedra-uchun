<?php namespace RaxiDev\ArtPanel\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Xabarlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    // $slugs ishlashi uchun Sluggable import qilinadi
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_xabarlar';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Files nomli polyaga repeats ni yoqish uchun
    protected $jsonable = ['files'];

    // Agar formada surat yoki fayl yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [        
        'file' => ['System\Models\File'],
        'image' => ['System\Models\File'],

    ];

    public $attachMany = [        
        'gallereya_images' => ['System\Models\File']        

    ];


     // Agar slug ga avtomatik i++ son qo'shilishini istasak pastdagi metod yoziladi
    protected $slugs = ['slug' => 'title'];


    // Agar saqlashdan oldin nimadur amaliyot qilish zarur bo'lsa beforeSave() funksiyasidan foydalanish mumkin
     public function beforeSave(){ 
        $user = BackendAuth::getUser(); 
        $this->user_id = $user->id; 
        // $this->user_id - refers to your table column
    }

    public function getFullNameAttribute(){
        return $this->firstname." ".$this->lastname;
    }

     // Agar modelda biron tablitsiyaga relation ishlatish kerak bo'lsa uni shu metod orqali bajariladi

    public $belongsTo = ['user'=>'Backend\Models\User'];

    // Nechta odam ko'rganini hisoblash funksiyasi
    public function increaseViewCount() {
        $this->timestamps = false;
        $this->increment('views_count');
        $this->timestamps = true;
    }
        
    
    


}
