<?php namespace Briliantmax\Profil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBriliantmaxProfil4 extends Migration
{
    public function up()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->dropColumn('layanan');
        });
    }
    
    public function down()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->text('layanan');
        });
    }
}
