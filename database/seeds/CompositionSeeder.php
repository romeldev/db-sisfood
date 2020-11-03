<?php

use Illuminate\Database\Seeder;

class CompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Composition::Class, 10)->create();
    }
}
