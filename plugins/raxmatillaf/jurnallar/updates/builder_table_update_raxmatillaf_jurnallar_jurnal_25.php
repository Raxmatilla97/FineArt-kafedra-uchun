<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal25 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->string('start_page')->nullable();
            $table->string('end_page')->nullable();
            $table->text('iqtiboslar')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->dropColumn('start_page');
            $table->dropColumn('end_page');
            $table->text('iqtiboslar')->nullable(false)->change();
        });
    }
}
