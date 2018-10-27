<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escort extends Model
{
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'imagen_principal', 
        'numero_telefono', 'altura', 'medidas', 'viajes', 'barrio_id', 
        'categoria', 'created_at', 'updated_at', 'genero','destacada'
    ];

    public function zona(){
        return $this->belongsTo('App\Barrio');
    }
}
