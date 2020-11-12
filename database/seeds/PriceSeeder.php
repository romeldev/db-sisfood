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
        $foods = Food::all();
        $factorUnits = FactorUnit::all();

        foreach($companies as $company){
            $myFoods = $foods->random(20);
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
        return $data;
    }
}
