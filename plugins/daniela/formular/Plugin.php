<?php namespace Daniela\Formular;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return ['Daniela\Formular\Components\TestFormular' => 'testFormular'];
    }

    public function registerSettings()
    {
    }
}
