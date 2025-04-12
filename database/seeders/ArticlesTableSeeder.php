<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $article = new Article();
            $article->title = '記事タイトル ' . $i;
            $article->body = '記事本文 ' . $i;
            $article->save();
        }
    }
}

