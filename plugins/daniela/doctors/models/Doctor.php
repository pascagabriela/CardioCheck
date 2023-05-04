<?php namespace daniela\Doctors\Models;

use Model;

/**
 * Model
 */
class Doctor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'daniela_doctors_information';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
