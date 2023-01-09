<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtkatalogArtwork extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artkatalog_artwork', function($table)
        {
            $table->integer('category_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artkatalog_artwork', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
