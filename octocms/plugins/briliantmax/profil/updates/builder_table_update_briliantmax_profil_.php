<?php namespace Briliantmax\Profil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBriliantmaxProfil extends Migration
{
    public function up()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->string('phone2');
            $table->renameColumn('phone', 'phone1');
        });
    }
    
    public function down()
    {
        Schema::table('briliantmax_profil_', function($table)
        {
            $table->dropColumn('phone2');
            $table->renameColumn('phone1', 'phone');
        });
    }
}
