<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginKatalogArtWork2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_art_work', function($table)
        {
            $table->string('narxi')->nullable();
            $table->boolean('is_sale')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('rassomlar_haqida_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title', 255)->nullable()->change();
            $table->string('slug', 255)->nullable()->change();
            $table->text('content')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_katalog_art_work', function($table)
        {
            $table->dropColumn('narxi');
            $table->dropColumn('is_sale');
            $table->dropColumn('is_active');
            $table->dropColumn('rassomlar_haqida_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('title', 255)->nullable(false)->change();
            $table->string('slug', 255)->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
        });
    }
}
