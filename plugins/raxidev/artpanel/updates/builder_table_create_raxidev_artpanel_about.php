<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxidevArtpanelAbout extends Migration
{
    public function up()
    {
        Schema::create('raxidev_artpanel_about', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('small_title')->nullable();
            $table->string('big_title')->nullable();
            $table->string('about_kafedra')->nullable();
            $table->string('about_news')->nullable();
            $table->string('button')->nullable();
            $table->string('tell')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxidev_artpanel_about');
    }
}
