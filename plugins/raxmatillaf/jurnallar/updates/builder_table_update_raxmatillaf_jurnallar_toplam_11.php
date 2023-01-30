<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplam11 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->dropColumn('kelgusi');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->boolean('kelgusi')->nullable()->default(0);
        });
    }
}
