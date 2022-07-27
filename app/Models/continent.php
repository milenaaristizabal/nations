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
}
