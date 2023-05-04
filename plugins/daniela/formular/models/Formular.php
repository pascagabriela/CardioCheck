<?php namespace Daniela\Formular\Models;

use Illuminate\Http\Request;
use Model;

/**
 * Model
 */
class Formular extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $table = 'daniela_formular_data';
    public array $rules = [
        'age' => 'required',
        'sex' => 'required',
        'chest_pain' => 'required',
        'resting_blood_pressure' => 'required',
        'cholesterol' => 'required',
        'fasting_blood_sugar' => 'required',
        'resting_ecg' => 'required',
        'max_heart_rate' => 'required',
        'exercise_angina' => 'required',
        'oldpeak' => 'required',
        'st_slope' => 'required'
    ];
}
