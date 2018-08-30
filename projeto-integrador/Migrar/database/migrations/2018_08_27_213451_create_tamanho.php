<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamanho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
      Schema::create('tamanho', function (Blueprint $table){
        $table->increments('id');
        $table->string('name');
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
      Schema::table('tamanho', function (Blueprint $table){
        $table->dropForeign(['id_categoria']);
        $table->dropIfExists('tamanho');
      });
      Schema::enableForeignKeyConstraints();
    }
}
