<?php
namespace Guiliredu\BrazilianCityMigrationSeed\Database\Seeds;

use Illuminate\Database\Seeder;
use Guiliredu\BrazilianCityMigrationSeed\Database\Seeds\CityTableSeeder;
use Guiliredu\BrazilianCityMigrationSeed\Database\Seeds\StateTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
    }
}
