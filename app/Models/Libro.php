<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends BaseModel
{
    use HasFactory;
    protected $table = 'Libro';
    protected $fillable = ['ISBN' , 'Titulo' , 'NumeroEjemplares' , 'idAutor' , 'idEditorial' , 'idTema'];

    public function Autor(){
        return $this->hasOne(Autor::class, 'idAutor','idAutor');
    }
    public function Editorial(){
        return $this->hasOne(Editorial::class,'idEditorial','idEditorial');
    }
    public function Tema(){
        return $this->hasOne(Tema::class,'idTema','idTema');
    }
}
