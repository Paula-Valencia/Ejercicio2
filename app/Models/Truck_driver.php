<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck_driver extends Model
{
    use HasFactory;
    public function package(){
        return $this->hasMany('App\Models\package');

    }
}
