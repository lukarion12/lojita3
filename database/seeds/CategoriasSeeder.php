<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => "Alimentos"
        ]);

        DB::table('categorias')->insert([
            'nome' => "Livros"
        ]);

        DB::table('categorias')->insert([
            'nome' => "Animais"
        ]);
        
        DB::table('categorias')->insert([
            'nome' => "Celulares"
        ]);
    }
}
