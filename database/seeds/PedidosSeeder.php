<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'pago' => true,
            'data' => Carbon::parse('2000-01-01'),
            'cliente_id' => 1,
        ]);

        DB::table('pedidos')->insert([
            'pago' => false,
            'data' => Carbon::parse('2000-01-01'),
            'cliente_id' => 1,
        ]);

        DB::table('pedidos')->insert([
            'pago' => false,
            'data' => Carbon::parse('2000-01-01'),
            'cliente_id' => 1,
        ]);

        DB::table('pedidos')->insert([
            'pago' => true,
            'data' => Carbon::parse('2000-01-01'),
            'cliente_id' => 3,
        ]);

        
    }
}
