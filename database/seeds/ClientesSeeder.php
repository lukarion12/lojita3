<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => "Maria",
            'telefone' => '7533032654',
            'email' => 'maria@gmail.com',
        ]);

        DB::table('clientes')->insert([
            'nome' => "José",
            'telefone' => '7433035754',
            'email' => 'jose@gmail.com',
        ]);

        DB::table('clientes')->insert([
            'nome' => "Cosmo",
            'telefone' => '7136232685',
            'email' => 'cosmo@gmail.com',
        ]);

        DB::table('clientes')->insert([
            'nome' => "Wanda",
            'telefone' => '7353032654',
            'email' => 'wanda@gmail.com',
        ]);
    }
}
