<?php namespace Briliantmax\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBriliantmaxBlog extends Migration
{
    public function up()
    {
        Schema::create('briliantmax_blog_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->date('date');
            $table->text('post');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('briliantmax_blog_');
    }
}
