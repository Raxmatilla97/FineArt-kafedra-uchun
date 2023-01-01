<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginTeachers4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->string('slug')->nullable();
            $table->text('desc')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_teachers', function($table)
        {
            $table->dropColumn('slug');
            $table->text('desc')->nullable(false)->change();
        });
    }
}
