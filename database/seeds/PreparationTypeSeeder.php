<?php

use Illuminate\Database\Seeder;

class PreparationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PreparationType::class, 10)->create();
    }
}
