<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar3 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->integer('views_count')->nullable();
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->dropColumn('views_count');
    });
}
}
