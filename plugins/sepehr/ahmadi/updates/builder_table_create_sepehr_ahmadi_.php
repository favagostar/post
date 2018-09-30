<?php namespace Sepehr\Ahmadi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSepehrAhmadi extends Migration
{
    public function up()
    {
        Schema::create('sepehr_ahmadi_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sepehr_ahmadi_');
    }
}
