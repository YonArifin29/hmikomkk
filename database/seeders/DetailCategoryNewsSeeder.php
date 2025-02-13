<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailCategoryNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailCategoryNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailCategoryNews::factory(10)->create();
    }
}
