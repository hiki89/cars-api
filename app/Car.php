<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model', 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'
    ];

    public static function paginate($take, $skip) {
        return Car::when($take, function($query) use($take) {
            return $query->take($take);
        })
        ->when($skip, function($query) use($skip) {
            return $query->skip($skip);
        })
        ->get();
    }
}
