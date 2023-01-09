<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtkatalogArtists extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artkatalog_artists', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artkatalog_artists');
    }
}
