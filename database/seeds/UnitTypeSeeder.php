<?php

use Illuminate\Database\Seeder;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\UnitType::class, 3)->create();
        App\UnitType::insert($this->data());
    }

    public function data()
    {
        return [
            [ 'descrip' => 'MINIMA' ],
            [ 'descrip' => 'ESTANDAR' ],
            [ 'descrip' => 'COMERCIAL' ],
        ];
    }
}
