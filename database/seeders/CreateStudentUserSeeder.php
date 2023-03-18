<?php

namespace Database\Seeders;

use App\Models\StudentUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateStudentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentUser::factory()->count(20)->create();
    }
}
