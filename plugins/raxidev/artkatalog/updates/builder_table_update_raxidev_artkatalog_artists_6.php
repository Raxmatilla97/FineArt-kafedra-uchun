<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtkatalogArtists6 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artkatalog_artists', function($table)
    {
        $table->string('tugulgan_yili')->nullable();
    });
}

public function down()
{
    Schema::table('raxidev_artkatalog_artists', function($table)
    {
        $table->dropColumn('tugulgan_yili');
    });
}
}
