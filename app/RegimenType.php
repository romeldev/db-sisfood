<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegimenType extends Model
{
    protected $fillable = [ 'id', 'descrip' ];

    public $timestamps = false;
}
