<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginTeachers2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->string('familya', 255)->nullable()->change();
            $table->string('ism', 255)->nullable()->change();
            $table->string('sharif', 255)->nullable()->change();
            $table->string('lavozim', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->string('familya', 255)->nullable(false)->change();
            $table->string('ism', 255)->nullable(false)->change();
            $table->string('sharif', 255)->nullable(false)->change();
            $table->string('lavozim', 255)->nullable(false)->change();
        });
    }
}
