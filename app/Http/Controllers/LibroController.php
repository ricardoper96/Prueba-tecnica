<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibroRequest;
use App\Http\Services\LibroService;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Libro;
use App\Models\Tema;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LibroController extends Controller
{
    protected $libroService;
    public function __construct(LibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $libros = $this->libroService->index($request);
        return view('Libros.index',compact('libros'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::all();
        $editoriales= Editorial::all();
        $temas = Tema::all();

        return view('Libros.create', compact('autores','editoriales','temas') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLibroRequest $request)
    {
        $libro = $this->libroService->storeLibro($request);
        return response()->json($libro,Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return response()->json($libro,Response::HTTP_OK);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateLibroRequest $request, $id)
    {
        $Libro= $this->libroService->editLibro($id,$request);
        return response()->json($Libro,Response::HTTP_OK);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idLibro
     * @return \Illuminate\Http\Response
     */
    public function destroy($idLibro)
    {
        $Libro= $this->libroService->deleteLibro($idLibro);
        return response()->json($Libro,Response::HTTP_OK);

    }
}
