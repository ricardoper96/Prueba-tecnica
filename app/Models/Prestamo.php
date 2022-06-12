<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends BaseModel
{
    use HasFactory;
    protected $table = 'Prestamo';
    protected $fillable = ['FechaPrestamo' , 'FechaEntrega' , 'idsocio' , 'idLibro'];
}
