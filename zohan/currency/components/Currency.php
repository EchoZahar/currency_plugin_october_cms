<?php namespace Zohan\Currency\Components;

use Cms\Classes\ComponentBase;
use Zohan\Currency\Models\Currency as CurrencyModel;

/**
 * Currency Component
 */
class Currency extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Currency Component',
            'description' => 'Show all countries currencies...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $this->page['currencies'] = CurrencyModel::select('id', 'name', 'code', 'symbol')->get();
//        dd($this->page['currencies']);
    }
}
