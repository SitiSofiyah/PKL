<?php namespace Briliantmax\Profil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBriliantmaxProfil extends Migration
{
    public function up()
    {
        Schema::create('briliantmax_profil_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('name');
            $table->string('logo');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->text('desc');
            $table->text('layanan');
            $table->text('motto');
            $table->primary(['name']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('briliantmax_profil_');
    }
}
