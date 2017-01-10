<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criação da migration das compras
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->nullable();
            //chave estrangeira dos produtos pertencentes a compra
            $table->integer('products_id')->nullable();
            $table->float('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
