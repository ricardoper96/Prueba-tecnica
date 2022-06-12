<?php

namespace App\Http\Services;

use App\Http\Requests\CreateLibroRequest;
use Illuminate\Http\Request;

interface LibroService
{
    public function index(Request $request);
    public function editLibro(int $id , CreateLibroRequest $request);
    public function storeLibro(CreateLibroRequest $request);
    public function deleteLibro(int $idLibro);
}
