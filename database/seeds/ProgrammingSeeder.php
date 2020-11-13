<?php

use Illuminate\Database\Seeder;
use App\Programming;
use App\Company;
use App\Professional;
use App\RegimenType;
use App\FoodType;
use Carbon\Carbon;

class ProgrammingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programming::query()->delete();
        Programming::insert( $this->data() ); 
    }

    public function data()
    {
        $data = [];
        $companies = Company::all();
        $professionals = Professional::all();
        $regimenTypes = RegimenType::all();
        $foodTypes = FoodType::all();

        foreach($companies as $company)
        {
            $date = Carbon::now();
            $myRegimenTypes = $regimenTypes->where('company_id', $company->id);

            $numProgs = rand(10, 30);

            if( $myRegimenTypes->count()){

                $dates = [];
                for($i=0; $i< $numProgs; $i++)
                {
                    $data[] =[
                        'date' => Carbon::now()->subDays($i)->format('Y-m-d'),
                        'company_id' => $company->id,
                        'professional_id' => $professionals->random(1)->first()->id,
                        'regimen_type_id' => 1013,
                        'regimen_type_id' => $myRegimenTypes->random(1)->first()->id,
                        'food_type_id' => $foodTypes->random(1)->first()->id,
                    ];
                }
            }
        }
        return $data;
    }
}
