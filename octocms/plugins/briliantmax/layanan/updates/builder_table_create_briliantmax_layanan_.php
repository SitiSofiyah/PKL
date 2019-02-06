<?php namespace Briliantmax\Layanan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBriliantmaxLayanan extends Migration
{
    public function up()
    {
        Schema::create('briliantmax_layanan_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('layanan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('briliantmax_layanan_');
    }
}
