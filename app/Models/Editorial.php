<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends BaseModel
{
    use HasFactory;
    protected $table = 'Editorial';
    protected $fillable = ['NombreEditorial' , 'Direccion' , 'Telefono'];
}
