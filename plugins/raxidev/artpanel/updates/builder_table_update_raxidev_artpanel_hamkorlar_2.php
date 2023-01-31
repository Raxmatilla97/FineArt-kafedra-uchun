<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelHamkorlar2 extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_hamkorlar', function($table)
        {
            $table->boolean('is_active')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_hamkorlar', function($table)
        {
            $table->smallInteger('is_active')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
