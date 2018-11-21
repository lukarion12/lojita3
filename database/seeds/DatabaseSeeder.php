<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(PedidosSeeder::class);
        $this->call(PedidoProdutoSeeder::class);
    }
}
