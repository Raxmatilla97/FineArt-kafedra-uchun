<?php namespace RaxmatillaF\Jurnallar\Components;

use Cms\Classes\ComponentBase;
use DB;
use RaxmatillaF\Jurnallar\Models\Jurnallar as Jurnal;
use Redirect;
/**
 * Jurnallar Component
 */
class Jurnallar extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Jurnallar Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun()
    {
        
       $item = Jurnal::whereSlug( $this->param('slug'))->first();
            //dd($item);
            if (empty($item)) {
                return Redirect::back();
            }
       
            $item->increaseViewCount();
       
    }
}
