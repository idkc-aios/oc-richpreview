<?php namespace Aios\RichPreviews\Components;

use Cms\Classes\ComponentBase;

use Config;

class RichPreviews extends ComponentBase
{

    public $rules = [];

    public function componentDetails()
    {
        return [
            'name'        => 'aios.richpreviews::lang.component.link.name',
            'description' => 'aios.richpreviews::lang.component.link.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['url'] = Config::get('app.url');
    }
}