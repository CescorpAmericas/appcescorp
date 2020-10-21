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
         $this->call(PermissionsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ShipmentsTableSeeder::class);
         $this->call(FactemitidasTableSeeder::class);
         $this->call(FactrecibidasTableSeeder::class);
         $this->call(repviajesTablaSeeder::class);
    }
}
