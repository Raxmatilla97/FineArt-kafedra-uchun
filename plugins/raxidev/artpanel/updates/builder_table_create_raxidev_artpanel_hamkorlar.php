<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelHamkorlar extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_hamkorlar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->string('url')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_hamkorlar');
    }
}
