<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use Caffeinated\Shinobi\Models\Role_user;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();

        Role::create([
          'name' => 'Admin',
          'slug' => 'admin',
          'special' => 'all-access'
        ]);

        /*User::create([
          'name' => 'Administrador',
          'email' => 'admin@cescorp-americas.com',
          'password' => 'admin123'
        ]);*/
    }
}
