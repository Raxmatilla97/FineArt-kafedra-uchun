<?php namespace RaxmatillaF\Jurnallar\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Jurnallar extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('RaxmatillaF.Jurnallar', 'main-menu-item');
    }
    
    public function iqtiboslar(){
        $this->test = "test2";
        dd($this->test);
    }  
    
    
}
