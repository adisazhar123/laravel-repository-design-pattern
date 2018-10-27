<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $faker = \Faker\Factory::create();
      for ($i=0; $i < 100; $i++) {
        Article::create(['content' => $faker->realText()]);
      }
        // $this->call(UsersTableSeeder::class);
    }
}
