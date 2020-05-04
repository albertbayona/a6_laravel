<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('rol', 'user')->first();
        $role_admin = Role::where('rol', 'admin')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
//        $user->rol()->attach($role_user);//attach se usa cuando es el has many pero aqui es el belongs to
        $user->rol()->associate($role_user);


        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->rol()->associate($role_admin);
        $user->save();
    }
}
