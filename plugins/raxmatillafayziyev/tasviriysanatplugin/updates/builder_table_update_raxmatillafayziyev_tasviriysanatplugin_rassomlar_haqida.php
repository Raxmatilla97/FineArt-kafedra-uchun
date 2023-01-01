<?php namespace RaxmatillaFayziyev\TasviriySaNatPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafayziyevTasviriysanatpluginRassomlarHaqida extends Migration
{
    public function up()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_rassomlar_haqida', function($table)
        {
            $table->string('familya')->nullable();
            $table->string('ism')->nullable();
            $table->string('sharif')->nullable();
            $table->text('about_u')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillafayziyev_tasviriysanatplugin_rassomlar_haqida', function($table)
        {
            $table->dropColumn('familya');
            $table->dropColumn('ism');
            $table->dropColumn('sharif');
            $table->dropColumn('about_u');
            $table->dropColumn('is_active');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
