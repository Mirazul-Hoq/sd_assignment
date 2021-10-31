<?php

use Illuminate\Database\Seeder;

class ProlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Prolist::class, 50)->create();
    }
}
