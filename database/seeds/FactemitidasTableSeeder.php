<?php

use Illuminate\Database\Seeder;

class FactemitidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Factemitida::class, 10)->create();
    }
}
