@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center mx-auto">
    <h1>Editar Categoria</h1>
    <form method="POST" action="{{route('categorias.update',$categoria)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nombreInput">Nombre</label>
          <input type="text" class="form-control" id="nombreInput" placeholder="Nombre de categoria" name="nombre" value={{old('nombre',$categoria->nombre)}}>
          @error('nombre')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
</div>
@endsection
