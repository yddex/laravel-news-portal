<?php
namespace App\Http\Controllers;

trait GetNewsTrait
{
    protected function getNews() :array
    {

        $news = [];
        for($i = 0; $i < 10; $i++)
        {
            $news[] = [
                'id' => $i,
                'title' => fake()->title(),
                'body' => fake()->text(100),
                'author' => fake()->name(),
                'created_at' => now()->format('d-m-Y')
            ];
        }

        return $news;
    }

    protected function getCategories():array
    {
        $c =[];
        for ($i=0; $i < 5; $i++) {
            $c[] = [
                'id' => $i,
                'title' => fake()->title()
            ];
        }
        return $c;
    }
 
}