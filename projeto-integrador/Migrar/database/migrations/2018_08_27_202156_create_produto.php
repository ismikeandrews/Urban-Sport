<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
      Schema::create('produto', function (Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->string('foto');
        $table->float('valor', 8, 2);
        $table->mediumText('description');
        $table->unsignedInteger('id_marca');
        $table->foreign('id_marca')->references('id')->on('marca');
        $table->unsignedInteger('id_tamanho');
        $table->foreign('id_tamanho')->references('id')->on('tamanho');
        $table->unsignedInteger('id_esporte');
        $table->foreign('id_esporte')->references('id')->on('esporte');
        $table->unsignedInteger('id_categoria');
        $table->foreign('id_categoria')->references('id')->on('categoria');
      });
      Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();
      Schema::table('produto', function (Blueprint $table) {
        $table->dropForeign(['id_marca']);
        $table->dropForeign(['id_tamanho']);
        $table->dropForeign(['id_esporte']);
        $table->dropForeign(['id_categoria']);
        $table->dropIfExists('produto');
      });
      Schema::enableForeignKeyConstraints();
    }
}
