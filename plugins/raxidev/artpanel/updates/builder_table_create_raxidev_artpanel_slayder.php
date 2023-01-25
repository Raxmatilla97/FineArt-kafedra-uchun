<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelSlayder extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_slayder', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_active')->nullable();
            $table->text('content')->nullable();
            $table->string('mini_title')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_slayder');
    }
}
