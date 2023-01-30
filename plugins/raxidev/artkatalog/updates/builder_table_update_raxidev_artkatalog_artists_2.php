<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtkatalogArtists2 extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artkatalog_artists', function($table)
        {
            $table->smallInteger('title');
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artkatalog_artists', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
