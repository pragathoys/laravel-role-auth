<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->title = 'Admin';
        $role_admin->details = 'An administrator';
        $role_admin->save();


        $role_moderator = new Role();
        $role_moderator->title = 'Moderator';
        $role_moderator->details = 'A moderator';
        $role_moderator->save();


        $role_user = new Role();
        $role_user->title = 'User';
        $role_user->details = 'A regular User';
        $role_user->save();  
    }
}
