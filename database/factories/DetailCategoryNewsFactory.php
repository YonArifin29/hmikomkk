<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\DetailCategoryNews;
use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailCategoryNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DetailCategoryNews::class;

    public function definition(): array
    {
        return [
            'news_id' => News::factory(),
            'category_id' => Category::factory()
        ];
    }
}
