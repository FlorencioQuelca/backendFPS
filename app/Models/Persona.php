<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table ='personas';

    protected $fillable = [
        "ci",
        "paterno",
        "materno",
        "nombres",
        "grado",
        "direccion",
        "fechaNacimiento",
        "fono1",
        "fono2",
        "email",
        "genero",
        "observacion",
    ];
    protected $hidden =['created_at','updated_at'];
    
}
   
