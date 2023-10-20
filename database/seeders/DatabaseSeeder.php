<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Student::factory(2)->create();
        Address::factory(2)->create();
    }
}
