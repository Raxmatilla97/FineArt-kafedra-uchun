<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillafJurnallarToplam extends Migration
{
    public function up()
    {
        Schema::create('raxmatillaf_jurnallar_toplam', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->text('full_content')->nullable();
            $table->integer('views_count')->nullable()->default(0);
            $table->integer('down_count_fulls')->nullable()->default(0);
            $table->string('full_pdf_doc')->nullable();
            $table->boolean('is_archive')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatillaf_jurnallar_toplam');
    }
}
