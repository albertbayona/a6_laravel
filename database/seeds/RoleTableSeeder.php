<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->rol = 'admin';
        $role->save();

        $role = new Role();
        $role->rol = 'user';
        $role->save();
    }
}
