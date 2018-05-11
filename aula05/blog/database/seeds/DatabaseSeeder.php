<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Toda seed deve ser chamada aqui.
        $this->call(UsersTableSeeder::class);
    }
}
