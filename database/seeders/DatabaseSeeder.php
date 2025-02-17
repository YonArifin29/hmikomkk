<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\DetailTraining;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use App\Models\DetailCategoryNews;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\CategorySeeder;
use App\Models\DetailCategoryArticle;
use App\Models\DetailSosmed;
use App\Models\Member;
use App\Models\Sosmed;
use App\Models\Training;
use Database\Seeders\DetailCategoryArticleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call only seeders, not models
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,  // Make sure these Seeder classes exist
            DetailCategoryArticleSeeder::class,
            NewsSeeder::class,
            DetailCategoryNewsSeeder::class,
            MemberSeeder::class,
            TrainingSeeder::class,
            SosmedSeeder::class,
            DetailTrainingSeeder::class,
            DetailSosmedSeeder::class
        ]);

        // Create articles with valid users
        Article::factory(10)->create([
            'user_id' => User::inRandomOrder()->first()->id,
        ]);

        // Create DetailCategoryArticle with valid relationships
        DetailCategoryArticle::factory(10)->create([
            'article_id' => Article::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
        ]);
        
        News::factory(10)->create([
            'user_id' => User::inRandomOrder()->first()->id,
        ]);

        DetailCategoryNews::factory(10)->create([
            'news_id' => News::inRandomOrder()->first()->id, 
            'category_id' => Category::inRandomOrder()->first()->id,
        ]);

        DetailTraining::factory(10)->create([
            'member_id' => Member::inRandomOrder()->first()->id, 
            'training_id' => Training::inRandomOrder()->first()->id,
        ]);

        DetailSosmed::factory(10)->create([
            'member_id' => Member::inRandomOrder()->first()->id, 
            'sosmed_id' => Sosmed::inRandomOrder()->first()->id,
        ]);
    }
}
