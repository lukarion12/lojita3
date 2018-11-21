<?php

use Illuminate\Database\Seeder;

class PedidoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 1, 'produto_id' => 1, 'quantidade' => 3]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 1, 'produto_id' => 3, 'quantidade' => 1]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 1, 'produto_id' => 4, 'quantidade' => 2]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 2, 'produto_id' => 2, 'quantidade' => 1]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 3, 'produto_id' => 1, 'quantidade' => 11]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 3, 'produto_id' => 2, 'quantidade' => 4]);
        DB::table('pedido_produtos')->insert([ 'pedido_id' => 4, 'produto_id' => 1, 'quantidade' => 23]);
    }
}
