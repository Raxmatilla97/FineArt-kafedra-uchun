<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelRassomlar extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_rassomlar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_rassomlar');
    }
}
