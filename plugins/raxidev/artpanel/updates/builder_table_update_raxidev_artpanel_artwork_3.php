<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelArtwork3 extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->boolean('is_active')->default(1)->change();
            $table->boolean('is_sale')->default(0)->change();
            $table->dropColumn('tst');
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->boolean('is_active')->default(null)->change();
            $table->boolean('is_sale')->default(null)->change();
            $table->smallInteger('tst');
        });
    }
}
