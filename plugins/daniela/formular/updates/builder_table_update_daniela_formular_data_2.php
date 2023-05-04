<?php namespace Daniela\Formular\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielaFormularData2 extends Migration
{
    public function up()
    {
        Schema::table('daniela_formular_data', function($table)
        {
            $table->smallInteger('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('daniela_formular_data', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
