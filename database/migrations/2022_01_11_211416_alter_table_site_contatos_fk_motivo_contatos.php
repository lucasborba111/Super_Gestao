<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableSiteContatosFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('site_contatos', function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contato_id');
        });
        DB::statement('update site_contatos set motivo_contato_id = motivo_contato');
    
        Schema::table('site_contatos', function(Blueprint $table){
            $table->foreign('motivo_contato_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_contatos', function(Blueprint $table){
            $table->create('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contato_id_foreign');

        });
        DB::statement('update site_contatos set motivo_contato = motivo_contato_id');
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('motivo_contato_id');
        });
    }
}
