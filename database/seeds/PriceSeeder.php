<?php

use Illuminate\Database\Seeder;
use App\Price;
use App\Company;
use App\Food;
use App\FactorUnit;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::query()->delete();
        Price::insert( $this->data() );
    }

    public function data(){
        $min=1; $max=5;
        $data = [];
        $companies = Company::all();
        $factorUnits = FactorUnit::all();

        $countFood = [];
        foreach($companies as $company){

            $myFoods = DB::select("select distinct
            pre.company_id, foo.*
            from foods as foo
            left join preparation_details as pred on pred.food_id = foo.id
            left join preparations as pre on pre.id = pred.preparation_id
            where pre.company_id = $company->id");

            if( isset($myFoods[0])){
                foreach($myFoods as $food){
                    $myFactorUnits = $factorUnits->where('food_id', $food->id);
                    foreach($myFactorUnits as $factorUnit){
                        $data[] = [
                            'company_id' => $company->id,
                            'food_id' => $food->id,
                            'factor_unit_id' => $factorUnit->id,
                            'currency_type_id' => 1,
                            'price' => rand($min*10, $max*10)/10,
                        ];
                    }
                }
            }
        }

        // dd(count($data));
        return $data;
    }
}
