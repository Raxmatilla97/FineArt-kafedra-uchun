<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar5 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->integer('views_count')->default(1)->change();
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_xabarlar', function($table)
    {
        $table->integer('views_count')->default(null)->change();
    });
}
}
