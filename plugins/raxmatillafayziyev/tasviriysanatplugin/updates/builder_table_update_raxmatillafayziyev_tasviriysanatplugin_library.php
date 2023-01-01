<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginLibrary extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_library', function($table)
        {
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('library_category_id')->nullable();
            $table->text('content')->nullable();
            $table->text('fayllar')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_library', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
            $table->dropColumn('library_category_id');
            $table->dropColumn('content');
            $table->dropColumn('fayllar');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
