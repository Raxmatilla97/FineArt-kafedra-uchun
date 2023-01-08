<?php namespace RaxiDev\ArtPanel\Models;

use Model;

use BackendAuth;

/**
 * Model
 */
class Library extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

     // $slugs ishlashi uchun Sluggable import qilinadi
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxidev_artpanel_library';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Agar formada surat yoki fayl yuklash kerak bo'lsa shu metod orqali uni amalga oshirish mumkin
    public $attachOne = [
        'rasm' => ['System\Models\File'],
        'fayl' => ['System\Models\File'],

    ];

     // Agar modelda biron tablitsiyaga relation ishlatish kerak bo'lsa uni shu metod orqali bajariladi

    public $belongsTo = ['user'=>'Backend\Models\User'];

     // Agar slug ga avtomatik i++ son qo'shilishini istasak pastdagi metod yoziladi
    protected $slugs = ['slug' => 'title'];


    // Agar saqlashdan oldin nimadur amaliyot qilish zarur bo'lsa beforeSave() funksiyasidan foydalanish mumkin
     public function beforeSave(){ 
        $user = BackendAuth::getUser(); 
        $this->user_id = $user->id; 
        // $this->user_id - refers to your table column
        }

        public function getFullNameAttribute()
    {
        return $this->firstname." ".$this->lastname;
    }

    
}
