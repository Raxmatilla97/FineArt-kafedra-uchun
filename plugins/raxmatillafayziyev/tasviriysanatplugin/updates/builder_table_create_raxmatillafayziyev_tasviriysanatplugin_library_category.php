<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillafayziyevTasviriysanatpluginLibraryCategory extends Migration
{
    public function up()
    {
        Schema::create('raxmatillafayziyev_tasviriysanatplugin_library_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatillafayziyev_tasviriysanatplugin_library_category');
    }
}
