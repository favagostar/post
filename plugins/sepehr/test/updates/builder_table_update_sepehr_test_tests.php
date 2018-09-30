<?php namespace Sepehr\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSepehrTestTests extends Migration
{
    public function up()
    {
        Schema::table('sepehr_test_tests', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sepehr_test_tests', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
