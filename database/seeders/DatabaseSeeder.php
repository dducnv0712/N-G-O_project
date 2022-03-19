<?php

namespace Database\Seeders;

use App\Models\Contribution;
use App\Models\Project;
use App\Models\Volunteer;
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
         \App\Models\User::factory(1)->create();
//        Project::factory(50)->create();
//        Volunteer::factory(20)->create();
//        Contribution::factory(50)->create();


    }
}
