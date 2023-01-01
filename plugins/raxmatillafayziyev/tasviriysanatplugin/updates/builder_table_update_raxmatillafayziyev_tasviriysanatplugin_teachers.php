<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginTeachers extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->string('familya');
            $table->string('ism');
            $table->string('sharif');
            $table->string('lavozim');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->dropColumn('familya');
            $table->dropColumn('ism');
            $table->dropColumn('sharif');
            $table->dropColumn('lavozim');
        });
    }
}
