<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal20 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            // $table->dropColumn('toplam_sahifa_soni');
            // $table->dropColumn('doi_slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            // $table->string('toplam_sahifa_soni', 10)->nullable();
            // $table->string('doi_slug', 255)->nullable();
        });
    }
}
