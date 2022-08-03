<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    //la tabla a conectar
    protected $table = "countries";
    //la clave primaria de la tabla
    protected $primaryKey = "country_id";
    //omitir campos de uditoria
    public $tiempstamps = false;
    use HasFactory;
    use HasFactory;

    //Many to Manyy country - language relationship
    public function languages(){
        //belongstomany method
        //1. related model
        //2. pivot table(intermediate table)
        //3. foreign key of current model
        //4. foreign key ofrelated model
        return $this->belongsToMany(Language::class, 'country_languages',
                                                     'country_id',
                                                     'language_id' );
    }

    //M:1 country - region
    //relationship
    public function regions(){
        //BelongsTo to method: parameters
        //1. related model
        //2. foreign key of related model in current model
        return $this->belongsTo(Region::class , 'region_id');
    }

    
}
