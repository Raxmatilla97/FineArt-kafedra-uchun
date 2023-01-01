<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillafayziyevTasviriysanatpluginKatalogArtist extends Migration
{
    public function up()
    {
        Schema::create('raxmatillafayziyev_tasviriysanatplugin_katalog_artist', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatillafayziyev_tasviriysanatplugin_katalog_artist');
    }
}
