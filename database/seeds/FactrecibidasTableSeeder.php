<?php

use Illuminate\Database\Seeder;

class FactrecibidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Factrecibida::class, 10)->create();
    }
}
