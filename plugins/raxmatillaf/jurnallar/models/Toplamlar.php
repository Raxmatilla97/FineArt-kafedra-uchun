<?php namespace RaxmatillaF\Jurnallar\Models;

use Model;

/**
 * Model
 */
class Toplamlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'title',
        'full_content'
       
     ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatillaf_jurnallar_toplam';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'image' => \System\Models\File::class,
        'full_pdf_doc' => \System\Models\File::class,
    ];
    

    
    public $hasMany = [
           'jurnallar' => [
                 \RaxmatillaF\Jurnallar\Models\Jurnallar::class,
                'order'      => 'title desc'
               // 'conditions' => 'status = 1'
    ]
        ];
        
 
}
