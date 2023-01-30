<?php namespace RaxmatillaF\Jurnallar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillafJurnallarToplami extends Migration
{
    public function up()
    {
        Schema::table('raxmatillaf_jurnallar_toplami', function($table)
        {
            $table->string('slug', 255);
            $table->string('image')->nullable();
            $table->text('authors');
            $table->string('abstraksiya_pdf')->nullable();
            $table->text('abiut_cite_article')->nullable();
            $table->string('full_journal_pdf');
            $table->integer('created_user_id')->unsigned();
            $table->integer('send_user_id')->nullable()->unsigned();
            $table->integer('jurnal_toplami_id')->unsigned();
            $table->boolean('status')->default(0);
            $table->integer('views_count')->nullable()->default(0);
            $table->integer('down_count_abstr')->nullable()->default(0);
            $table->integer('down_count_fulls')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatillaf_jurnallar_toplami', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('image');
            $table->dropColumn('authors');
            $table->dropColumn('abstraksiya_pdf');
            $table->dropColumn('abiut_cite_article');
            $table->dropColumn('full_journal_pdf');
            $table->dropColumn('created_user_id');
            $table->dropColumn('send_user_id');
            $table->dropColumn('jurnal_toplami_id');
            $table->dropColumn('status');
            $table->dropColumn('views_count');
            $table->dropColumn('down_count_abstr');
            $table->dropColumn('down_count_fulls');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
