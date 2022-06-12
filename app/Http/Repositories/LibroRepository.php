<?php

namespace App\Http\Repositories;

use App\Http\Requests\CreateLibroRequest;
use App\Http\Services\LibroService;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroRepository extends Repository implements LibroService
{
  public function __construct()
  {
      $this->model = new Libro();
  }

    public function index(Request $request)
    {
        $type = $request->type === null ? 'DESC' : $request->type;
        $perPage = $request->perPage === null ? 10 : $request->perPage;
        $orderBy = $request->orderBy === null ? 'Libro.idLibro' : $request->orderBy;
        $search = $request->search === null ? '' : $request->search;
        return $this->model->query()
            ->select('Libro.*')
            ->orderBy($orderBy,$type)
            ->paginate($search);

    }


    public function editLibro(int $id, CreateLibroRequest $request)
    {
        $libro = $this->findInstance($id);
        if(!empty($libro)){
            $libro->ISBM = $request->ISBM;
            $libro->idTema = $request->idTema;
            $libro->idAutor = $request->idAutor;
            $libro->idEditorial = $request->idEditorial;
            $libro->NumeroEjemplares = $request->NumeroEjemplares;
            $libro->Titulo =  $request->Titulo;
            $libro->save();
        }
        return $libro;
    }

    public function storeLibro(CreateLibroRequest $request)
    {
        $libro =  new $this->model;
        $libro->ISBM = $request->ISBM;
        $libro->idTema = $request->idTema;
        $libro->idAutor = $request->idAutor;
        $libro->idEditorial = $request->idEditorial;
        $libro->NumeroEjemplares = $request->NumeroEjemplares;
        $libro->Titulo =  $request->Titulo;
        $libro->save();

        return $libro;
    }

    public function deleteLibro(int $id)
    {
        $libro = $this->findInstance($id);
        if(!empty($libro)){
            $libro->delete();
        }
        return $libro;
    }
}
