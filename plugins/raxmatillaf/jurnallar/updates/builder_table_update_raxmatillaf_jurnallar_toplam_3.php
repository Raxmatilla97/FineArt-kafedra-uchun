<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplam3 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->string('image_path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->dropColumn('image_path');
        });
    }
}
