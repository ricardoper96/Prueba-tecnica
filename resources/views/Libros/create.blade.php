@extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new Libro</h1>


        <div class="container mt-4">
            <form method="POST" action="{{route('libros.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="Titulo" class="form-label">Titulo</label>
                    <input value="{{ old('Titulo') }}"
                           type="text"
                           class="form-control"
                           name="Titulo"
                           placeholder="Titulo" required>

                    @if ($errors->has('Titulo'))
                        <span class="text-danger text-left">{{ $errors->first('Titulo') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ISBM" class="form-label">ISBM</label>
                    <input value="{{ old('ISBM') }}"
                           type="ISBM"
                           class="form-control"
                           name="ISBM"
                           placeholder="ISBM address" required>
                    @if ($errors->has('ISBM'))
                        <span class="text-danger text-left">{{ $errors->first('ISBM') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="NumeroEjemplares" class="form-label">NumeroEjemplares</label>
                    <input value="{{ old('NumeroEjemplares') }}"
                           type="text"
                           class="form-control"
                           name="NumeroEjemplares"
                           placeholder="NumeroEjemplares" required>
                    @if ($errors->has('NumeroEjemplares'))
                        <span class="text-danger text-left">{{ $errors->first('NumeroEjemplares') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <select class="form-select" name="autors">
                        @foreach ($autores as $autor)
                            <option value="{{ $autor->idAutor }}">
                                {{ $autor->NombreAutor }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <select class="form-select" name="Editorial">
                        @foreach ($editoriales as $Editorial)
                            <option value="{{ $Editorial->idEditorial }}">
                                {{ $Editorial->NombreEditorial}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="Tema">
                        @foreach ($temas as $Tema)
                            <option value="{{ $Tema->idTema }}">
                                {{ $Tema->NombreTema}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save Libro</button>
                <a href="{{ route('libros.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
