<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(array(
            0 =>
            array(
                'title' => 'Acre',
                'sigla' => 'AC',
            ),
            1 =>
            array(
                'title' => 'Alagoas',
                'sigla' => 'AL',
            ),
            2 =>
            array(
                'title' => 'Amazonas',
                'sigla' => 'AM',
            ),
            3 =>
            array(
                'title' => 'Amapá',
                'sigla' => 'AP',
            ),
            4 =>
            array(
                'title' => 'Bahia',
                'sigla' => 'BA',
            ),
            5 =>
            array(
                'title' => 'Ceará',
                'sigla' => 'CE',
            ),
            6 =>
            array(
                'title' => 'Distrito Federal',
                'sigla' => 'DF',
            ),
            7 =>
            array(
                'title' => 'Espírito Santo',
                'sigla' => 'ES',
            ),
            8 =>
            array(
                'title' => 'Goiás',
                'sigla' => 'GO',
            ),
            9 =>
            array(
                'title' => 'Maranhão',
                'sigla' => 'MA',
            ),
            10 =>
            array(
                'title' => 'Minas Gerais',
                'sigla' => 'MG',
            ),
            11 =>
            array(
                'title' => 'Mato Grosso do Sul',
                'sigla' => 'MS',
            ),
            12 =>
            array(
                'title' => 'Mato Grosso',
                'sigla' => 'MT',
            ),
            13 =>
            array(
                'title' => 'Pará',
                'sigla' => 'PA',
            ),
            14 =>
            array(
                'title' => 'Paraiba',
                'sigla' => 'PB',
            ),
            15 =>
            array(
                'title' => 'Pernambuco',
                'sigla' => 'PE',
            ),
            16 =>
            array(
                'title' => 'Piauí',
                'sigla' => 'PI',
            ),
            17 =>
            array(
                'title' => 'Paraná',
                'sigla' => 'PR',
            ),
            18 =>
            array(
                'title' => 'Rio de Janeiro',
                'sigla' => 'RJ',
            ),
            19 =>
            array(
                'title' => 'Rio Grande do Norte',
                'sigla' => 'RN',
            ),
            20 =>
            array(
                'title' => 'Rondônia',
                'sigla' => 'RO',
            ),
            21 =>
            array(
                'title' => 'Roraima',
                'sigla' => 'RR',
            ),
            22 =>
            array(
                'title' => 'Rio Grande do Sul',
                'sigla' => 'RS',
            ),
            23 =>
            array(
                'title' => 'Santa Catarina',
                'sigla' => 'SC',
            ),
            24 =>
            array(
                'title' => 'Sergipe',
                'sigla' => 'SE',
            ),
            25 =>
            array(
                'title' => 'São Paulo',
                'sigla' => 'SP',
            ),
            26 =>
            array(
                'title' => 'Tocantins',
                'sigla' => 'TO',
            ),
        ));
    }
}
