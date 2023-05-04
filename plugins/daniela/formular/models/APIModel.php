<?php

namespace Daniela\Formular\Models;

class APIModel
{

    public function passInformationToAPI($data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/predict',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
          "age": '.$data->age.',
          "sex": '.$data->sex.',
          "chest_pain": '.$data->chest_pain.',
          "resting_blood_pressure": '.$data->resting_blood_pressure.',
          "cholesterol": '.$data->cholesterol.',
          "fasting_blood_sugar": '.$data->fasting_blood_sugar.',
          "resting_ecg": '.$data->resting_ecg.',
          "max_heart_rate": '.$data->max_heart_rate.',
          "exercise_angina": '.$data->exercise_angina.',
          "oldpeak": '.$data->oldpeak.',
          "st_slope": '.$data->st_slope.'
        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}