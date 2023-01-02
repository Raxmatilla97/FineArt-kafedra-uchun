<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelArtwork2 extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->smallInteger('tst');
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->dropColumn('tst');
        });
    }
}
