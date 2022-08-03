<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    
    //la tabla a conectar
    protected $table = "regions";
    //la clave primaria de la tabla
    protected $primaryKey = "region_id";
    //omitir campos de uditoria
    public $tiempstamps = false;
    use HasFactory;

    //1 to m: region - country relationship

    public function countries(){
        return $this->hasMany(Country::class , 'region_id');
    }
}
