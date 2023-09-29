<?php

namespace Database\Seeders;

use App\Models\grades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        grades::factory()->count(100)->create();
    }
}
