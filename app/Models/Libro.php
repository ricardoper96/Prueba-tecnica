<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends BaseModel
{
    use HasFactory;
    protected $table = 'Libro';
    protected $fillable = ['ISBN' , 'Titulo' , 'NumeroEjemplares' , 'idAutor' , 'idEditorial' , 'idTema'];
}
