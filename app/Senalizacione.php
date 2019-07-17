<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senalizacione extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'id','codigo','ruta','detalle','id_categoria','id_tipo',
    ];

}
