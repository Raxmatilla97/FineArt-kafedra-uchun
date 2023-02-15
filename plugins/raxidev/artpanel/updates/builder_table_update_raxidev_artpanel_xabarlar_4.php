<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar4 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->text('gallereya')->nullable();
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->dropColumn('gallereya');
    });
}
}
