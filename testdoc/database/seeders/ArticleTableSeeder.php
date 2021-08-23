<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++){
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
