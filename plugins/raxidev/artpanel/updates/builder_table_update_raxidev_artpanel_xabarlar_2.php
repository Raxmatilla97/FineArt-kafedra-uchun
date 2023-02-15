<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar2 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->string('small_content')->nullable();
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->dropColumn('small_content');
    });
}
}
