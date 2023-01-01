<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginTeachers5 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->text('art_works')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->dropColumn('art_works');
        });
    }
}
