<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("create or replace view view_progs as
        select
        pro.date, pro.company_id,
        prof.id professional_id, prof.fullname as professional_fullname, 
        prof.profession as professional_profession, prof.code as professional_code,
        rety.id as regimen_type_id, rety.descrip as regimen_type_descrip,
        foty.id as food_type_id, foty.descrip as food_type_descrip,
        pre.id as preparation_id, pre.descrip as preparation_descrip,
        pred.factor_unit_id,
        foo.id as food_id, foo.descrip as food_descrip,
        pred.amount
        from preparation_details as pred
        left join programming_details as prod on prod.preparation_id = pred.preparation_id
        left join programmings as pro on pro.id = prod.programming_id
        left join preparations as pre on pre.id = pred.preparation_id
        left join foods as foo on foo.id = pred.food_id
        left join food_types as foty on foty.id = pro.food_type_id
        left join regimen_types as rety on rety.id = pro.regimen_type_id
        left join professionals as prof on prof.id = pro.professional_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view if exists view_progs');
    }
}
