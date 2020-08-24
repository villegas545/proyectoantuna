<?php

use Illuminate\Database\Seeder;
use App\Roles;
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
        $role_user = Roles::where('name','user')->first();
        $role_admin = Roles::where('name','admin')->first();

        $user = new  User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new  User();
        $user->name = "User";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);

        
    }
}
