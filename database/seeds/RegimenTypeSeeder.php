<?php

use Illuminate\Database\Seeder;

class RegimenTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RegimenType::Class, 20)->create();
    }
}
