@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Users</h1>
        <div class="lead">
            Manage your libros here.
            <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right">Add new Libro</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ISBM</th>
                <th scope="col">Titulo</th>
                <th scope="col">Numero de Ejemplares</th>
                <th scope="col">Nombre de Autor</th>
                <th scope="col">Nombre de Editorial</th>
                <th scope="col">Nombre del Tema</th>

            </tr>
            </thead>
            <tbody>
            @foreach($libros as $libro)
                <tr>
                    <th scope="row">{{ $libro->idLibro }}</th>
                    <td>{{ $libro->ISBM }}</td>
                    <td>{{ $libro->Titulo }}</td>
                    <td>{{ $libro->NumeroEjemplares }}</td>
                    <td><a href="{{ route('libros.show', $libro->idLibro) }}" class="btn btn-warning btn-sm">Show</a></td>
                    <td><a href="{{ route("libros.edit", $libro->idLibro) }}" class="btn btn-info btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('libros.destroy', $libro->idLibro)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>



                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $libros->links() !!}
        </div>

    </div>
@endsection
