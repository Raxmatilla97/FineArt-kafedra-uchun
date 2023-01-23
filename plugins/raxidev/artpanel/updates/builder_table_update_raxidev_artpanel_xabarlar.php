<?php namespace RaxiDev\ArtPanel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtpanelXabarlar extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artpanel_xabarlar', function($table)
        {
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('bolimlar')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('files')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artpanel_xabarlar', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->dropColumn('is_active');
            $table->dropColumn('bolimlar');
            $table->dropColumn('user_id');
            $table->dropColumn('files');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
