<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
   
     protected $fillable = [
        'id','nombre', 'ap_paterno', 'ap_materno','ci','foto',
    ];

}
