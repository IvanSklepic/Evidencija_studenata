<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
                ['name' => 'Zagreb', 'zip_code' => '10000', 'country_id' => 1],
                ['name' => 'Sisak', 'zip_code' => '44000', 'country_id' => 1],
                ['name' => 'Vukovar', 'zip_code' => '32000', 'country_id' => 1]
                ]);
    }
}
