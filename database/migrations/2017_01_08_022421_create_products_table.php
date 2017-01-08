<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criação da migration das fantasias
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            //chave estrangeira do fornecedor da fantasia
            $table->integer('purchase_id')->nullable();            
            $table->integer('user_id');
            $table->string('name');
            //imagem da fantasia
            $table->string('img');
            $table->string('description');
            $table->float('value');
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
        Schema::dropIfExists('products');
    }
}
