<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelArtwork extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_artwork', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_artwork');
    }
}
