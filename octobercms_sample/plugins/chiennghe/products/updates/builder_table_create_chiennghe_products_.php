<?php namespace Chiennghe\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChienngheProducts extends Migration
{
    public function up()
    {
        Schema::create('chiennghe_products_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->double('price', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('chiennghe_products_');
    }
}
