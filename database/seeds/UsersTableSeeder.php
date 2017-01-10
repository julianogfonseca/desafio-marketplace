<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //criação dos seeders do banco de dados, que são dados fixados(padrão)
  public function run() {
    DB::table('users')->insert([
      'type'       => 'Dona',
      'products_id' => 1,
      'profit'    => 0,  
      'name'      => 'Maria Barros',
      //timestamp da criação
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('users')->insert([
      'type'       => 'Parceiro',
      'products_id' => 2,
      'profit'    => 0,
      'name'      => 'João Thiago Samuel Cavalcanti',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('users')->insert([
      'type'       => 'Parceiro',
      'products_id' => 3,
      'profit'    => 0,
      'name'      => 'César Anthony João Martins',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
    
  }
}
