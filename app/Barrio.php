<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function escorts(){
        return $this->hasMany('App\Escort');
    }

}
