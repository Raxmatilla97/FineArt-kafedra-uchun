<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelRassomlar extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_rassomlar', function($table)
        {
            $table->string('fish')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_rassomlar', function($table)
        {
            $table->dropColumn('fish');
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->dropColumn('is_active');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
