<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continent extends Model
{
    //la tabla a conectar
    protected $table = "continents";
    //la clave primaria de la tabla
    protected $primaryKey = "continent_id";
    //omitir campos de uditoria
    public $tiempstamps = false;
    use HasFactory;
    
    //relacion entre continente y sus regiones
    public function regiones(){
        //parameters
        //1. linked model
        //2. foreign key of current model into Related model Region
        return $this->hasMany(Region::class, 'continent_id');
    }
}
