<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplam10 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->string('issue', 10)->nullable();
            $table->string('volume', 10)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->dropColumn('issue');
            $table->dropColumn('volume');
        });
    }
}
