<?php
namespace Guiliredu\BrazilianCityMigrationSeed\Database\Seeds;

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => '1',
                'title' => 'Acre',
                'letter' => 'AC',
                'iso' => '12',
                'slug' => 'acre',
                'population' => '816687',
                'region_id' => 1
            ),
            1 =>
            array (
                'id' => '2',
                'title' => 'Alagoas',
                'letter' => 'AL',
                'iso' => '27',
                'slug' => 'alagoas',
                'population' => '3358963',
                'region_id' => 2
            ),
            2 =>
            array (
                'id' => '3',
                'title' => 'Amazonas',
                'letter' => 'AM',
                'iso' => '13',
                'slug' => 'amazonas',
                'population' => '4001667',
                'region_id' => 1
            ),
            3 =>
            array (
                'id' => '4',
                'title' => 'Amapá',
                'letter' => 'AP',
                'iso' => '16',
                'slug' => 'amapa',
                'population' => '782295',
                'region_id' => 1                
            ),
            4 =>
            array (
                'id' => '5',
                'title' => 'Bahia',
                'letter' => 'BA',
                'iso' => '29',
                'slug' => 'bahia',
                'population' => '15276566',
                'region_id' => 2
            ),
            5 =>
            array (
                'id' => '6',
                'title' => 'Ceará',
                'letter' => 'CE',
                'iso' => '23',
                'slug' => 'ceara',
                'population' => '8963663',
                'region_id' => 2
            ),
            6 =>
            array (
                'id' => '7',
                'title' => 'Distrito Federal',
                'letter' => 'DF',
                'iso' => '53',
                'slug' => 'distrito-federal',
                'population' => '2977216',
                'region_id' => 3
            ),
            7 =>
            array (
                'id' => '8',
                'title' => 'Espírito Santo',
                'letter' => 'ES',
                'iso' => '32',
                'slug' => 'espirito-santo',
                'population' => '3973697',
                'region_id' => 4
            ),
            8 =>
            array (
                'id' => '9',
                'title' => 'Goiás',
                'letter' => 'GO',
                'iso' => '52',
                'slug' => 'goias',
                'population' => '6695855',
                'region_id' => 3
            ),
            9 =>
            array (
                'id' => '10',
                'title' => 'Maranhão',
                'letter' => 'MA',
                'iso' => '21',
                'slug' => 'maranhao',
                'population' => '6954036',
                'region_id' => 2
            ),
            10 =>
            array (
                'id' => '11',
                'title' => 'Minas Gerais',
                'letter' => 'MG',
                'iso' => '31',
                'slug' => 'minas-gerais',
                'population' => '20997560',
                'region_id' => 4
            ),
            11 =>
            array (
                'id' => '12',
                'title' => 'Mato Grosso do Sul',
                'letter' => 'MS',
                'iso' => '50',
                'slug' => 'mato-grosso-do-sul',
                'population' => '2682386',
                'region_id' => 3
            ),
            12 =>
            array (
                'id' => '13',
                'title' => 'Mato Grosso',
                'letter' => 'MT',
                'iso' => '51',
                'slug' => 'mato-grosso',
                'population' => '3305531',
                'region_id' => 3
            ),
            13 =>
            array (
                'id' => '14',
                'title' => 'Pará',
                'letter' => 'PA',
                'iso' => '15',
                'slug' => 'para',
                'population' => '8272724',
                'region_id' => 1
            ),
            14 =>
            array (
                'id' => '15',
                'title' => 'Paraiba',
                'letter' => 'PB',
                'iso' => '25',
                'slug' => 'paraiba',
                'population' => '3999415',
                'region_id' => 2
            ),
            15 =>
            array (
                'id' => '16',
                'title' => 'Pernambuco',
                'letter' => 'PE',
                'iso' => '26',
                'slug' => 'pernambuco',
                'population' => '9410336',
                'region_id' => 2
            ),
            16 =>
            array (
                'id' => '17',
                'title' => 'Piauí',
                'letter' => 'PI',
                'iso' => '22',
                'slug' => 'piaui',
                'population' => '3212180',
                'region_id' => 2
            ),
            17 =>
            array (
                'id' => '18',
                'title' => 'Paraná',
                'letter' => 'PR',
                'iso' => '41',
                'slug' => 'parana',
                'population' => '11242720',
                'region_id' => 5
            ),
            18 =>
            array (
                'id' => '19',
                'title' => 'Rio de Janeiro',
                'letter' => 'RJ',
                'iso' => '33',
                'slug' => 'rio-de-janeiro',
                'population' => '16635996',
                'region_id' => 4
            ),
            19 =>
            array (
                'id' => '20',
                'title' => 'Rio Grande do Norte',
                'letter' => 'RN',
                'iso' => '24',
                'slug' => 'rio-grande-do-norte',
                'population' => '3474998',
                'region_id' => 2
            ),
            20 =>
            array (
                'id' => '21',
                'title' => 'Rondônia',
                'letter' => 'RO',
                'iso' => '11',
                'slug' => 'rondonia',
                'population' => '1787279',
                'region_id' => 1
            ),
            21 =>
            array (
                'id' => '22',
                'title' => 'Roraima',
                'letter' => 'RR',
                'iso' => '14',
                'slug' => 'roraima',
                'population' => '514229',
                'region_id' => 1
            ),
            22 =>
            array (
                'id' => '23',
                'title' => 'Rio Grande do Sul',
                'letter' => 'RS',
                'iso' => '43',
                'slug' => 'rio-grande-do-sul',
                'population' => '11286500',
                'region_id' => 5
            ),
            23 =>
            array (
                'id' => '24',
                'title' => 'Santa Catarina',
                'letter' => 'SC',
                'iso' => '42',
                'slug' => 'santa-catarina',
                'population' => '6910553',
                'region_id' => 5
            ),
            24 =>
            array (
                'id' => '25',
                'title' => 'Sergipe',
                'letter' => 'SE',
                'iso' => '28',
                'slug' => 'sergipe',
                'population' => '2265779',
                'region_id' => 2
            ),
            25 =>
            array (
                'id' => '26',
                'title' => 'São Paulo',
                'letter' => 'SP',
                'iso' => '35',
                'slug' => 'sao-paulo',
                'population' => '44749699',
                'region_id' => 4
            ),
            26 =>
            array (
                'id' => '27',
                'title' => 'Tocantins',
                'letter' => 'TO',
                'iso' => '17',
                'slug' => 'tocantins',
                'population' => '1532902',
                'region_id' => 1
            ),
        ));
    }
}
