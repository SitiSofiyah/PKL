<?php namespace Briliantmax\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBriliantmaxProduct extends Migration
{
    public function up()
    {
        Schema::create('briliantmax_product_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('product_gallery');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('briliantmax_product_');
    }
}
