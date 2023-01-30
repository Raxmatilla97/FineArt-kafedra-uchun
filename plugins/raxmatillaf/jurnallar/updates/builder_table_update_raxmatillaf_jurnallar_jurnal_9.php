<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal9 extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('abstraksiya_pdf');
            $table->dropColumn('full_journal_pdf');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_jurnal', function($table)
        {
            $table->string('image', 255)->nullable();
            $table->string('abstraksiya_pdf', 255)->nullable();
            $table->string('full_journal_pdf', 255)->nullable();
        });
    }
}
