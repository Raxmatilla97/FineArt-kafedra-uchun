<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillafJurnallarSohalar extends Migration
{
    public function up()
    {
        Schema::create('raxmatillaf_jurnallar_sohalar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatillaf_jurnallar_sohalar');
    }
}
