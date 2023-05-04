<?php namespace Daniela\Formular\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielaFormularData extends Migration
{
    public function up()
    {
        Schema::table('daniela_formular_data', function($table)
        {
            $table->integer('resting_blood_pressure')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('daniela_formular_data', function($table)
        {
            $table->binary('resting_blood_pressure')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
