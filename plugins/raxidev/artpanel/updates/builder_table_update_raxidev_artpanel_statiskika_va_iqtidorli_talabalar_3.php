<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelStatiskikaVaIqtidorliTalabalar3 extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_statiskika_va_iqtidorli_talabalar', function($table)
        {
            $table->dropColumn('statistika_image');
            $table->dropColumn('student_image');
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_statiskika_va_iqtidorli_talabalar', function($table)
        {
            $table->string('statistika_image', 255)->nullable();
            $table->string('student_image', 255)->nullable();
        });
    }
}
