<?php

use Illuminate\Database\Seeder;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FoodType::class, 10)->create();
    }
}
