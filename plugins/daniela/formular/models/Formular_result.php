<?php namespace Daniela\Formular\Models;

use Model;

/**
 * Model
 */
class Formular_result extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'daniela_formular_results';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
