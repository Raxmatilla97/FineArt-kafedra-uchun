<?php namespace RaxmatillaF\Jurnallar\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Jurnallar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'title',
        'authors',
        'abiut_cite_article',
        'ism_sharif',
        'mualif_malumot'
     ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatillaf_jurnallar_jurnal';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'toplamlar' => [
            'RaxmatillaF\Jurnallar\Models\Toplamlar',
             'order' => 'created_at desc',
            ],
           
            'sohalar' => [
            'RaxmatillaF\Jurnallar\Models\Sohalar',
            'table' => 'raxmatillaf_jurnallar_sohalar',
            'order' => 'title',
            'conditions' => 'status = 1'
            ],
            'user' => [\Backend\Models\User::class, 'key' => 'created_user_id']
            
        ];
        
      
    public function increaseViewCount() {
        $this->timestamps = false;
        $this->increment('views_count');
        $this->timestamps = true;
    }
        
    public $attachOne = [
        'abstraksiya_pdf' => \System\Models\File::class,
        'full_journal_pdf' => \System\Models\File::class,
        'image' => \System\Models\File::class,
        'aftor_image' => \System\Models\File::class
    ];
    
    protected $jsonable = ['iqtiboslar', 'keywords'];

    public function beforeSave(){ 
        $user = BackendAuth::getUser(); 
        $this->created_user_id = $user->id; 
        // $this->user_id - refers to your table column
        }
        
   
    
}
