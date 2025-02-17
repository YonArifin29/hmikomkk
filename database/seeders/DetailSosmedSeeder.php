<?php

namespace Database\Seeders;

use App\Models\DetailSosmed;
use Illuminate\Database\Seeder;

class DetailSosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailSosmed::factory(10)->create();
    }
}
