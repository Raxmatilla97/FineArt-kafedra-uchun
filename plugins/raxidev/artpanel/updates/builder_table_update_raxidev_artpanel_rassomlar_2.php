<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelRassomlar2 extends Migration
{
    public function up()
{
    Schema::table('raxidev_artpanel_rassomlar', function($table)
    {
        $table->string('lavozim')->nullable();
    });
}

public function down()
{
    Schema::table('raxidev_artpanel_rassomlar', function($table)
    {
        $table->dropColumn('lavozim');
    });
}
}
