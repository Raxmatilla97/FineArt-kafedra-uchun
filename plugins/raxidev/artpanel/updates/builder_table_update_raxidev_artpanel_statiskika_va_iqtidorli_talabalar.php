<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelStatiskikaVaIqtidorliTalabalar extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_statiskika_va_iqtidorli_talabalar', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_statiskika_va_iqtidorli_talabalar', function($table)
        {
            $table->string('slug', 255)->nullable();
        });
    }
}
