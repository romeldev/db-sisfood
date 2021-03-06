<?php

use App\Nutrient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(CompositionSeeder::class);
        $this->call(IngredientTypeSeeder::class);
        $this->call(FoodTypeSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RegimenTypeSeeder::class);
        $this->call(PreparationTypeSeeder::class);
        $this->call(CurrencyTypeSeeder::class);
        $this->call(ProfessionalSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(UnitTypeSeeder::class);
        $this->call(FactorUnitSeeder::class);
        $this->call(NutrientSeeder::class);
        $this->call(PreparationSeeder::class);
        $this->call(PreparationDetailSeeder::class);
        $this->call(ProgrammingSeeder::class);
        $this->call(ProgrammingDetailSeeder::class);
        $this->call(PriceSeeder::class);
    }
}
