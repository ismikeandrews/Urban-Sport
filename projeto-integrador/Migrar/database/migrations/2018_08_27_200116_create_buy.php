<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('buy', function (Blueprint $table){
          $table->increments('id');
          $table->unsignedInteger('id_users');
          $table->foreign('id_users')->references('id')->on('users');
          $table->unsignedInteger('id_carrinho');
          $table->foreign('id_carrinho')->references('id')->on('carrinho');
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
      Schema::table('buy', function (Blueprint $table) {
        $table->dropForeign(['id_users']);
        $table->dropForeign(['id_carrinho']);
        $table->dropIfExists('buy');
      });
      Schema::enableForeignKeyConstraints();
    }
}
