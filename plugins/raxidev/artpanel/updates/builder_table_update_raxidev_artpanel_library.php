<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelLibrary extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_library', function($table)
        {
            $table->string('bolimlar')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_library', function($table)
        {
            $table->dropColumn('bolimlar');
        });
    }
}
