<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CategoriesNews;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()
            ->withRole(UserRoles::ADMIN)
            ->create();


        $categories = Category::factory(5)
            ->has(News::factory(20)->for($user, 'user'), 'news')
            ->create();

        $sources = Source::factory(5)->create();
    }


}



