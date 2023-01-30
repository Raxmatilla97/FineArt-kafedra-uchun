<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplam6 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('image_path');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->string('image', 255)->nullable();
            $table->string('image_path', 255)->nullable();
        });
    }
}
