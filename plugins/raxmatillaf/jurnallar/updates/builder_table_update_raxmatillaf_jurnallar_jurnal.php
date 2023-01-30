<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarJurnal extends Migration
{
    public function up()
    {
        Schema::rename('raxmatillaf_jurnallar_toplami', 'raxmatillaf_jurnallar_jurnal');
    }
    
    public function down()
    {
        Schema::rename('raxmatillaf_jurnallar_jurnal', 'raxmatillaf_jurnallar_toplami');
    }
}
