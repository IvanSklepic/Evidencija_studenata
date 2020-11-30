<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
            'name' => 'Veleuciliste Velika Gorica',
            'oib' => '1234567890',
            'address' => 'Zagrebacka 50',
            'email' => 'info@vvg.hr',
            'phone_number' => '01123456',
            'city_id' => '1'
        ]);  
    }
}
