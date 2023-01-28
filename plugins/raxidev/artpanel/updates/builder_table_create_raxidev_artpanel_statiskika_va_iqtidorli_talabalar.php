<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelStatiskikaVaIqtidorliTalabalar extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_statiskika_va_iqtidorli_talabalar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('kichik_title')->nullable();
            $table->string('kotta_title')->nullable();
            $table->text('talabalar')->nullable();
            $table->text('statistika')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_statiskika_va_iqtidorli_talabalar');
    }
}
