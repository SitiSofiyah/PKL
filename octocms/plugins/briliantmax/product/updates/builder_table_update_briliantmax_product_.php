<?php namespace Briliantmax\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBriliantmaxProduct extends Migration
{
    public function up()
    {
        Schema::table('briliantmax_product_', function($table)
        {
            $table->dropColumn('product_gallery');
        });
    }
    
    public function down()
    {
        Schema::table('briliantmax_product_', function($table)
        {
            $table->string('product_gallery', 191);
        });
    }
}
