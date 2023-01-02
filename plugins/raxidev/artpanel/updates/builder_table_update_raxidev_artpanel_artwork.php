<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelArtwork extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_sale')->nullable();
            $table->string('price')->nullable();
            $table->integer('rassom_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_artwork', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->dropColumn('is_active');
            $table->dropColumn('is_sale');
            $table->dropColumn('price');
            $table->dropColumn('rassom_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
