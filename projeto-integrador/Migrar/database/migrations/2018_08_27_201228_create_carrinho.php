<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrinho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
      Schema::create('carrinho', function (Blueprint $table){
        $table->increments('id');
        $table->unsignedInteger('id_produto');
        $table->foreign('id_produto')->references('id')->on('produto');
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
      Schema::table('carrinho', function (Blueprint $table) {
        $table->dropForeign(['id_produto']);
        $table->dropIfExists('carrinho');
      });
      Schema::enableForeignKeyConstraints();
    }
}
