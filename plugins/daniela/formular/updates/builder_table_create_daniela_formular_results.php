<?php namespace Daniela\Formular\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielaFormularResults extends Migration
{
    public function up()
    {
        Schema::create('daniela_formular_results', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('user_id')->unsigned();
            $table->binary('target');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('daniela_formular_results');
    }
}
