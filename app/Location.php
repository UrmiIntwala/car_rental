<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table='locations';

    public $primaryKey = 'id';

    public $timestamps = true;
}
