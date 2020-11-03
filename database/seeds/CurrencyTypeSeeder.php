<?php

use Illuminate\Database\Seeder;

class CurrencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CurrencyType::Class, 10)->create();
    }
}
