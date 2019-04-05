<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
        $user = new User;
       	$user->name = "Admin";
       	$user->username = "admintest";
        $user->email = "admin@devtest.com";
        $user->password = bcrypt('secret');
        $user->save();
    }
}
