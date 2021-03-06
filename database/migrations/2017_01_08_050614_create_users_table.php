<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //pode ser a Maria(dona) ou Parceiros 
            $table->string('type');
            //chave estrangeira para os produtos pertencentes ao fornecedor
            $table->integer('products_id');
            $table->float('profit');
            $table->string('name');
            $table->integer('purchases_id')->nullable();
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
        Schema::drop('users');
    }
}
