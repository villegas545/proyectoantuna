<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Roles();
        $role->name ="admin";
        $role->save();

        $role = new Roles();
        $role->name ="user";
        $role->save();
    }
}
