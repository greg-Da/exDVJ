<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Movie;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create('fr_FR');
    	//USER
    	for ($i = 0; $i < 10; $i++) {
    		$user = new User;
    		$user->name = $faker->userName;
    		$user->email = $faker->unique()->email;
    		$user->password = bcrypt('123456');
    		$user->save();
    	}

    	//MOVIE
    	for ($i = 0; $i < 10; $i++) {
    		$movie = new Movie;
    		$movie->title = $faker->word;
    		$movie->story = $faker->realText($maxNbChars = 200);
    		$movie->year = $faker->numberBetween($min = 1990, $max = 2018);
    		$movie->actors = $faker->lastName;
    		$movie->rate = $faker->numberBetween($min = 0, $max = 5);
    		$movie->save();
    	}

    	//ARTICLE
    	for ($i = 0; $i < 10; $i++) {
    		$article = new Article;
    		$article->title = $faker->word;
    		$article->content = $faker->realText($maxNbChars = 200);
    		$article->save();        

    	}
    }
}