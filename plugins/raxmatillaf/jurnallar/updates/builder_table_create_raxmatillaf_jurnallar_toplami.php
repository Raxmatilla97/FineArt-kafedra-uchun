<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillafJurnallarToplami extends Migration
{
    public function up()
    {
        Schema::create('raxmatillaf_jurnallar_toplami', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatillaf_jurnallar_toplami');
    }
}