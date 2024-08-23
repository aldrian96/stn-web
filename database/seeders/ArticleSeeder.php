<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyData = [
            [
                "title" => "Artikel Sampah",
                "author" => "Ardian WIranto",
                "body" => "Artikel tentang sampah by Ardian Wiranto"
            ]
        ];
        foreach ($dummyData as $value) {
            $article = new Article();
            foreach($value as $key => $val) {
                $article->{$key} = $val;
            }
            $article->save();
        }
    }
}
