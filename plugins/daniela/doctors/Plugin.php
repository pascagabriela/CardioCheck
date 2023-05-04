<?php namespace daniela\Doctors;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return ['daniela\Doctors\Components\Doctor' => 'doctor'];
    }

    public function registerSettings()
    {
    }
}
