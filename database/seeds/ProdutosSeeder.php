<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => "Panetone",
            'quantidade' => 500,
            'descricao' => "Com passas <3",
            'imagem' => "",
            'preco' => 55,
            'categoria_id' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Doggo",
            'quantidade' => 5,
            'descricao' => "Iradão",
            'imagem' => "",
            'preco' => 32.56,
            'categoria_id' => 3,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Moto Z",
            'quantidade' => 100,
            'descricao' => "Celular Show",
            'imagem' => "",
            'preco' => 16,
            'categoria_id' => 4,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Harry Potter Completão",
            'quantidade' => 5,
            'descricao' => "Talvez a melhor saga",
            'imagem' => "",
            'preco' => 40,
            'categoria_id' => 2,
        ]);
    }
}
