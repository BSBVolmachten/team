<?php namespace Bsbvolmachten\Team\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Medewerkers extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage-medewerkers' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BsbVolmachten.Team', 'main-menu-item');
    }
}
