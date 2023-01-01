<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginKatalogArtist extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_artist', function($table)
        {
            $table->string('familya')->nullable();
            $table->string('ism')->nullable();
            $table->string('sharif')->nullable();
            $table->text('content')->nullable();
            $table->date('tugulgan_yili_va_otgan')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_artist', function($table)
        {
            $table->dropColumn('familya');
            $table->dropColumn('ism');
            $table->dropColumn('sharif');
            $table->dropColumn('content');
            $table->dropColumn('tugulgan_yili_va_otgan');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
