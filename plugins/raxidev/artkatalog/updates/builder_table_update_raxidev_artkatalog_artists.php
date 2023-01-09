<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtkatalogArtists extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artkatalog_artists', function($table)
        {
            $table->string('fish')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artkatalog_artists', function($table)
        {
            $table->dropColumn('fish');
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('is_active');
        });
    }
}
