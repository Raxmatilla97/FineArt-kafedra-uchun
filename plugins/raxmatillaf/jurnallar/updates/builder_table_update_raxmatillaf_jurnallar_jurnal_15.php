<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal15 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->string('toplam_sahifa_soni', 10)->nullable()->change();
            $table->smallInteger('doi_slug')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->string('toplam_sahifa_soni', 10)->nullable(false)->change();
            $table->smallInteger('doi_slug')->nullable(false)->change();
        });
    }
}
