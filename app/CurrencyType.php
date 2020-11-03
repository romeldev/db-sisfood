<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyType extends Model
{
    protected $fillable = [ 'id', 'descrip', 'symbol' ];

    public $timestamps = false;
}
