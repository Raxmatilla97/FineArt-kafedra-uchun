<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar6 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->string('tags')->nullable();
        $table->dropColumn('gallereya');
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->dropColumn('tags');
        $table->text('gallereya')->nullable();
    });
}
}
