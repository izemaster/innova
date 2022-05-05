@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center mx-auto">
    <h1>Crear Producto</h1>
    <form method="POST" action="{{route('productos.store')}}">
        @csrf
        <div class="form-group">
          <label for="nombreInput">Nombre</label>
          <input type="text" class="form-control" id="nombreInput" placeholder="Nombre del producto" name="nombre">
            @error('nombre')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="DescripcionInput">Descripcion</label>
          <input type="text" class="form-control" id="DescripcionInput" placeholder="Descrcipcion del producto" name="descripcion">
            @error('descripcion')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="PrecioInput">Precio</label>
            <input type="number" class="form-control" id="PrecioInput" placeholder="0.00" name="precio">
            @error('precio')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="form-group">
            <label for="CategoriaSelect">Categoría</label>
            <select class="form-control" id="CategoriaSelect" name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
            </select>
            @error('categoria_id')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
      </form>
</div>
@endsection
