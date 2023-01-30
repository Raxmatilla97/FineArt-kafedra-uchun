<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplam2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->dropColumn('amaldagi_son_status');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->boolean('amaldagi_son_status')->default(1);
        });
    }
}
