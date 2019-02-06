<?php namespace Briliantmax\Profil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBriliantmaxProfil3 extends Migration
{
    public function up()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->text('contact');
        });
    }
    
    public function down()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->dropColumn('contact');
        });
    }
}
