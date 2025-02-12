<?php

namespace Database\Seeders;
use App\Models\jersey;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jerseySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        jersey::factory(50)->create();
    }
}
