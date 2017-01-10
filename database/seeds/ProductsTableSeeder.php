<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run() {
    DB::table('products')->insert([
      'user_id'   => 1,
      'name'      => 'Darth Vader',
      'img'		  => 'https://http2.mlstatic.com/S_267321-MLB20758727462_062016-Y.jpg',
      'description' => 'Também conhecido como Anakin Skywalker, ele é o lider do Império que insiste em sempre falhar na construção e utilização de Estrelas da Morte.',
      //timestamp da criação
      'value'  	  => 125.00,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('products')->insert([
      'user_id'   => 2,
      'name'      => 'Cafú',
      'img'		  => 'http://imguol.com/blogs/132/files/2015/07/Cafu-Copa-2002-tacaa.jpg',
      'description' => 'Lateral direito e capitão da Seleção brasileira de futebol durante o campeonato mundial de 2002, também foi ídolo no Milan.',
      //timestamp da criação
      'value'  	  => 100.00,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('products')->insert([
      'user_id'   => 3,
      'name'      => 'Máscara de cavalo',
      'img'		  => 'https://http2.mlstatic.com/S_112201-MLB20278646958_042015-Y.jpg',
      'description' => 'Meme conhecido mundialmente, a máscara representa toda a zoeira de uma geração conectada a internet.',
      //timestamp da criação
      'value'  	  => 150.00,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
    
  }
}
