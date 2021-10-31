<?php

use Illuminate\Database\Seeder;

class CtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ctmark::class, 58)->create();
    }
}
