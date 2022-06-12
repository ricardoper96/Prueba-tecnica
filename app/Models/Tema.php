<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends BaseModel
{
    use HasFactory;
    protected $table = 'Tema';
    protected $fillable = ['NombreTema'];
}
