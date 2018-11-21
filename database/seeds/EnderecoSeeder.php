<?php

use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'rua' => "Sao José",
            'cidade' => 'Feira de Santana',
            'bairro' => "Petrolar",
            'numero' => 50,
            'uf' => 'BA',
            'cep' => "42036963",
            'cliente_id' => 1,
        ]);

        DB::table('enderecos')->insert([
            'rua' => "São João",
            'cidade' => 'Feira de Santana',
            'bairro' => "Campo Limpo",
            'numero' => 13,
            'uf' => "BA",
            'cep' => "42036963",
            'cliente_id' => 2,
        ]);

        DB::table('enderecos')->insert([
            'rua' => "Rua dos Bobos",
            'cidade' => 'Feira de Santana',
            'bairro' => 'Baraúnas',
            'numero' => 22,
            'uf' => "BA",
            'cep' => "42036963",
            'cliente_id' => 3,
        ]);

        DB::table('enderecos')->insert([
            'rua' => "Rua N",
            'cidade' => 'Feira de Santana',
            'bairro' => 'Centro',
            'numero' => 51,
            'uf' => "BA",
            'cep' => "42036963",
            'cliente_id' => 4,
        ]);
    }
}
