<?php namespace Sepehr\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSepehrTestTests2 extends Migration
{
    public function up()
    {
        Schema::table('sepehr_test_tests', function($table)
        {
            $table->dateTime('test_date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sepehr_test_tests', function($table)
        {
            $table->dropColumn('test_date');
        });
    }
}
