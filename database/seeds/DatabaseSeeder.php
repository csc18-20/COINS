<?php

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
        // $this->call(UsersTableSeeder::class);
        $user = App\User::create([
     	'name' => 'Agaba Davis',
     	'email' => 'dora67@gmail.com',
     	'password' => bcrypt('password'),
     	'admin' => 1
     ]);

     App\Profile::create([
     	'user_id' =>$user->id,
     	'avatar' => 'uploads/1.jpeg'
     ]);
    }
}
