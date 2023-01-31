<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelHamkorlar extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_hamkorlar', function($table)
        {
            $table->smallInteger('is_active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_hamkorlar', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
