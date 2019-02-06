<?php namespace Briliantmax\Profil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBriliantmaxProfil7 extends Migration
{
    public function up()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->string('logo', 191);
        });
    }
}
