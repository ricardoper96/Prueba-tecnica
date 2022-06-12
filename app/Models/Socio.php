<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends BaseModel
{
    use HasFactory;
    protected $table = 'Socio';
    protected $fillable = ['NombreCompleto' , 'Direccion' , 'Correo' , 'Telefono' , 'Foto'];
}
