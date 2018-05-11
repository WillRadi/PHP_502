<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	// Faker = dados "falsos"
     	$faker = Faker\Factory::create();
     	for ($i=0; $i < 3; $i++) { 
     		$user = new User;
     		$user->name = $faker->name;
     		$user->email = $faker->email;
     		$user->password = bcrypt('secret');

     		$user->save();
     	}
    }
}
