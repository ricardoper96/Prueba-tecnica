<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends BaseModel
{
    use HasFactory;
    protected $table = 'Autor';
    protected $fillable = ['NombreAutor'];

}

