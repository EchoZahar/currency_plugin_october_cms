<?php namespace Zohan\Currency\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Currencies Backend Controller
 */
class Currencies extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['zohan.currency.currencies'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Zohan.Currency', 'currency', 'currencies');
    }
}
