<?php

use Illuminate\Database\Seeder;

class PreparationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Preparation::class, 100)->create();
    }
}
