<?php namespace Daniela\Doctors\Components;

use Cms\Classes\ComponentBase;

class Doctor extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Doctor Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    function doctors()
    {
        return \daniela\Doctors\Models\Doctor::all();
    }
}
