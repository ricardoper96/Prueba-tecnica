<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizaciones_Libro extends BaseModel
{
    use HasFactory;
    protected $table = 'Actualizaciones_Libro';
    protected $fillable = ['idLibro' , 'ISBNAnterior' , 'NumeroEjemplaresAnterior' , 'FechaModificacion'];
}
