<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginKatalogArtist2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_artist', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_artist', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
