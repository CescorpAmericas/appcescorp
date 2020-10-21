<?php

use Illuminate\Database\Seeder;

class repviajesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\repviaje::class, 10)->create();
    }
}
