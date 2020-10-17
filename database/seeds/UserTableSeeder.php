<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	$role_admin = Role::where('title', 'Admin')->first();
	$role_moderator = Role::where('title', 'Moderator')->first();
	$role_user = Role::where('title', 'User')->first();


	$admin = new User();
	$admin->name = 'Admin';
	$admin->email = 'admin@test.com';
	$admin->password = bcrypt('pssword');
	$admin->save();
	$admin->roles()->attach($role_admin);

	$moderator = new User();
	$moderator->name = 'Moderator';
	$moderator->email = 'moderator@test.com';
	$moderator->password = bcrypt('password');
	$moderator->save();
	$moderator->roles()->attach($role_moderator);


	$user = new User();
	$user->name = 'User';
	$user->email = 'user@test.com';
	$user->password = bcrypt('password');
	$user->save();
	$user->roles()->attach($role_user);

    }
}
