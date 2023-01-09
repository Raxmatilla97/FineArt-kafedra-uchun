<?php namespace RaxiDev\ArtKatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxidevArtkatalogCategory extends Migration
{
    public function up()
    {
        Schema::table('raxidev_artkatalog_category', function($table)
        {
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxidev_artkatalog_category', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
