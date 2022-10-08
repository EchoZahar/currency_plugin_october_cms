<?php namespace Zohan\Currency;

use Backend;
use System\Classes\PluginBase;
use Zohan\Currency\Console\UploadDataCurrency;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Currency ',
            'description' => 'Currency conversion to USD ...',
            'author'      => 'Zohan',
            'icon'        => 'icon-leaf'
        ];
    }

    public function register()
    {
        $this->registerConsoleCommand('zohan.uploadcurrencies', UploadDataCurrency::class);
    }

    public function boot()
    {

    }

    public function registerComponents()
    {
        return [
            'Zohan\Currency\Components\Currency' => 'currency',
        ];
    }

    public function registerPermissions()
    {
        return [
            'zohan.currency.some_permission' => [
                'tab' => 'Currency',
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'currency' => [
                'label'       => 'Show currency',
                'url'         => Backend::url('zohan/currency/currencies'),
                'icon'        => 'icon-leaf',
                'permissions' => ['zohan.currency.*'],
                'order'       => 500,

                'sideMenu' => [
                    'posts' => [
                        'label' => 'Currencies',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('zohan/currency/currencies'),
                        'permissions' => ['zohan.currency.*'],
                    ],
                ]
            ],
        ];
    }
}
