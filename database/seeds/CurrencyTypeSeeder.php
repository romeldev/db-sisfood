<?php

use Illuminate\Database\Seeder;
use App\CurrencyType;

class CurrencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\CurrencyType::Class, 10)->create();
        CurrencyType::query()->delete();
        CurrencyType::insert($this->data());
    }

    public function data()
    {
        return [
            [ 'id' => 1, 'descrip' => 'NUEVOS SOLES' , 'symbol' => 'S/. '],
            [ 'id' => 2, 'descrip' => 'DÓLAR AMERICANO' , 'symbol' => '$   '],
        ];
    }
}
