<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal21 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->text('iqtiboslar');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->dropColumn('iqtiboslar');
        });
    }
}
