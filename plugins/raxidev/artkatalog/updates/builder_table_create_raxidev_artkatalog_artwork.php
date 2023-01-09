<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtkatalogArtwork extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artkatalog_artwork', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->integer('artists_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artkatalog_artwork');
    }
}
