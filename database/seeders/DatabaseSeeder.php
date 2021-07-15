<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Tag;
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

        Comment::factory(20)->create();
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     AuthorSeeder::class,
        //     TagSeeder::class
        // ]);
        // $this->call(TagSeeder::class);

    }
}
