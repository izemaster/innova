@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center mx-auto">
    <h1>Crear Categoria</h1>
    <form method="POST" action="{{route('categorias.store')}}">
        @csrf
        <div class="form-group">
          <label for="nombreInput">Nombre</label>
          <input type="text" class="form-control" id="nombreInput" placeholder="Nombre del producto" name="nombre">
          @error('nombre')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
</div>
@endsection
