<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SociedadAccidental extends Model
{
    use HasFactory;
    protected $table ='sociedadAccidentals';
    protected $fillable = [
        "nombre",
        "nombreLegal",
        "direccion",
        "fono1",
        "fono2",
        "email",
        "observacion",
    ];
    protected $hidden =['created_at','updated_at'];
    //relaciones
    public function descripcionSociedadAccidentals(){
        return $this->hasMany(DescripcionSociedadAccidental::class);
    }
   
}
