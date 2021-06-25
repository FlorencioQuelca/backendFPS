<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table ='empresas';

    protected $fillable = [
        "nombreEmpresa",
        "nit",
        "nombreLegal",
        "direccion",
        "fono1",
        "fono2",
        "email",
        "departamento",
        "observacion",
    ];
    // ocultar
    protected $hidden =['created_at','updated_at'];

    //relaciones
    public function descripcionSociedadAccidentals(){
        return $this->hasMany(DescipcionSociedadAccidental::class);
    }
   
}
