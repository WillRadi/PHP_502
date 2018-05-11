<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Post;

class PostsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = User::all();

        foreach ($users as $user) {
        	for ($i=0; $i < 2 ; $i++) { 
        		$post = new Post();
        		$post->title = $faker->word;
        		$post->description = $faker->text;
        		$post->user_id = $user->id;
        		$post->save();
        	}
        }
    }
}
