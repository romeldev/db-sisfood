<?php

use Illuminate\Database\Seeder;
use App\RegimenType;

class RegimenTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\RegimenType::Class, 20)->create();
        RegimenType::query()->delete();
        RegimenType::insert($this->data());
    }

    public function data()
    {
        return [
            [ 'id' => 1013, 'descrip' => 'NORMAL' , 'company_id' => 3],
            [ 'id' => 1014, 'descrip' => 'DIETA' , 'company_id' => 5],
            [ 'id' => 1015, 'descrip' => 'NORMAL' , 'company_id' => 5],
            [ 'id' => 1016, 'descrip' => 'HIPOCALORICO' , 'company_id' => 5],
            [ 'id' => 1017, 'descrip' => 'DIETA COMPLETA' , 'company_id' => 5],
            [ 'id' => 1018, 'descrip' => 'HIETA HIPOGRASA' , 'company_id' => 5],
            [ 'id' => 1019, 'descrip' => 'NORMAL' , 'company_id' => 13],
            [ 'id' => 1020, 'descrip' => 'COMPLETAS' , 'company_id' => 14],
            [ 'id' => 1021, 'descrip' => 'BLANDAS' , 'company_id' => 14],
        ];
    }
}
