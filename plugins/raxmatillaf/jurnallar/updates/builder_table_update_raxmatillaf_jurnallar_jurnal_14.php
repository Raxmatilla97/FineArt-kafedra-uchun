<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal14 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->smallInteger('doi_slug');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->dropColumn('doi_slug');
        });
    }
}
