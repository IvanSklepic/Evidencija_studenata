<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => Str::random(10),
            'birth_date' => Carbon::now()->subYears(rand(18, 55)),
            'phone_number' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'title' => Str::random(10)
        ]);
    }
}
