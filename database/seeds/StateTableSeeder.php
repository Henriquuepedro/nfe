<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['codigo_uf' => 11, 'uf' => 'RO', 'nome' => 'Rondônia'],
            ['codigo_uf' => 12, 'uf' => 'AC', 'nome' => 'Acre'],
            ['codigo_uf' => 13, 'uf' => 'AM', 'nome' => 'Amazonas'],
            ['codigo_uf' => 14, 'uf' => 'RR', 'nome' => 'Roraima'],
            ['codigo_uf' => 15, 'uf' => 'PA', 'nome' => 'Pará'],
            ['codigo_uf' => 16, 'uf' => 'AP', 'nome' => 'Amapá'],
            ['codigo_uf' => 17, 'uf' => 'TO', 'nome' => 'Tocantins'],
            ['codigo_uf' => 21, 'uf' => 'MA', 'nome' => 'Maranhão'],
            ['codigo_uf' => 22, 'uf' => 'PI', 'nome' => 'Piauí'],
            ['codigo_uf' => 23, 'uf' => 'CE', 'nome' => 'Ceará'],
            ['codigo_uf' => 24, 'uf' => 'RN', 'nome' => 'Rio Grande do Norte'],
            ['codigo_uf' => 25, 'uf' => 'PB', 'nome' => 'Paraíba'],
            ['codigo_uf' => 26, 'uf' => 'PE', 'nome' => 'Pernambuco'],
            ['codigo_uf' => 27, 'uf' => 'AL', 'nome' => 'Alagoas'],
            ['codigo_uf' => 28, 'uf' => 'SE', 'nome' => 'Sergipe'],
            ['codigo_uf' => 29, 'uf' => 'BA', 'nome' => 'Bahia'],
            ['codigo_uf' => 31, 'uf' => 'MG', 'nome' => 'Minas Gerais'],
            ['codigo_uf' => 32, 'uf' => 'ES', 'nome' => 'Espírito Santo'],
            ['codigo_uf' => 33, 'uf' => 'RJ', 'nome' => 'Rio de Janeiro'],
            ['codigo_uf' => 35, 'uf' => 'SP', 'nome' => 'São Paulo'],
            ['codigo_uf' => 41, 'uf' => 'PR', 'nome' => 'Paraná'],
            ['codigo_uf' => 42, 'uf' => 'SC', 'nome' => 'Santa Catarina'],
            ['codigo_uf' => 43, 'uf' => 'RS', 'nome' => 'Rio Grande do Sul'],
            ['codigo_uf' => 50, 'uf' => 'MS', 'nome' => 'Mato Grosso do Sul'],
            ['codigo_uf' => 51, 'uf' => 'MT', 'nome' => 'Mato Grosso'],
            ['codigo_uf' => 52, 'uf' => 'GO', 'nome' => 'Goiás'],
            ['codigo_uf' => 53, 'uf' => 'DF', 'nome' => 'Distrito Federal']
        ]);
    }
}
