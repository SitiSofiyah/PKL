<?php namespace Briliantmax\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBriliantmaxSlider extends Migration
{
    public function up()
    {
        Schema::create('briliantmax_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('briliantmax_slider_');
    }
}
