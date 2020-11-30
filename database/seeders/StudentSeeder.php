<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => Str::random(10),
            'birth_date' => Carbon::now()->subYears(rand(18, 55)),
            'email' => Str::random(10).'@gmail.com',
            'phone_number' => Str::random(10), 
            'citizenship' => Str::random(10), 
            'nationality' => Str::random(10), 
            'role_id' => '1'
        ]);
    }
}
