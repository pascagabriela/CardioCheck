<?php namespace Daniela\Formular\Components;

use Cms\Classes\ComponentBase;
use Daniela\Formular\Models\Formular;
use Daniela\Formular\Models\APIModel;
use Daniela\Formular\Models\Formular_result;
use Input;
use Auth;
use Redirect;

class TestFormular extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'TestFormular Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getFormData(){
        $data = new Formular();
        $data->age = Input::get('age');
        $data->sex = Input::get('sex');
        $data->chest_pain = Input::get('chest_pain');
        $data->resting_blood_pressure = Input::get('resting_blood_pressure');
        $data->cholesterol = Input::get('cholesterol');
        $data->fasting_blood_sugar = Input::get('fasting_blood_sugar');
        $data->resting_ecg = Input::get('resting_ecg');
        $data->max_heart_rate = Input::get('max_heart_rate');
        $data->exercise_angina = Input::get('exercise_angina');
        $data->oldpeak = Input::get('oldpeak');
        $data->st_slope = Input::get('st_slope');
        $data->user_id = Auth::user()->id;
        return $data;
    }

    public function onRequestEstimation(){
        $formData = $this->getFormData();
//        $formData->save();

        $apiModel = new APIModel();
        $result = $apiModel->passInformationToAPI($formData);
        $decodedResult = json_decode($result, true);

        $data_result = new Formular_result();
        $data_result->target = $decodedResult['target_value'];
        $data_result->user_id = $formData->user_id;
//        $data_result->save();

//        echo $decodedResult['target_value'];
        return[
            'result' => $decodedResult['prediction'],
            'target' => $decodedResult['target_value']
        ];
    }

}
