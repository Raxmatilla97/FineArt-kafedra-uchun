<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelElektronQollanmalar extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_elektron_qollanmalar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->string('file')->nullable();
            $table->string('url_html')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('bolimlar')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_elektron_qollanmalar');
    }
}
