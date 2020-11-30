<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            CollegeSeeder::class,
            ProgramSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            GradeSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
