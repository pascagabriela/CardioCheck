<?php namespace Daniela\Formular\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielaFormularData extends Migration
{
    public function up()
    {
        Schema::create('daniela_formular_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('age')->unsigned();
            $table->binary('sex');
            $table->integer('chest_pain')->unsigned();
            $table->binary('resting_blood_pressure');
            $table->integer('cholesterol')->unsigned();
            $table->binary('fasting_blood_sugar');
            $table->integer('resting_ecg')->unsigned();
            $table->integer('max_heart_rate')->unsigned();
            $table->binary('exercise_angina');
            $table->double('oldpeak', 10, 0);
            $table->integer('st_slope')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('daniela_formular_data');
    }
}
