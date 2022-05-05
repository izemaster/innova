@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center mx-auto">
    <h1>Editar Producto</h1>
    <form method="POST" action="{{route('productos.update',$producto)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nombreInput">Nombre</label>
          <input type="text" class="form-control" id="nombreInput" placeholder="Nombre del producto" name="nombre" value={{old('nombre',$producto->nombre)}}>
          @error('nombre')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="DescripcionInput">Descripcion</label>
          <input type="text" class="form-control" id="DescripcionInput" placeholder="Descrcipcion del producto" name="descripcion" value={{old('descripcion',$producto->descripcion)}}>
          @error('descripcion')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="PrecioInput">Precio</label>
            <input type="number" class="form-control" id="PrecioInput" placeholder="0.00" name="precio" value={{old('precio',$producto->precio)}}>
            @error('precio')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="form-group">
            <label for="CategoriaSelect">Categoría</label>
            <select class="form-control" id="CategoriaSelect" name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}" {{$producto->categoria->id == $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
            @endforeach
            </select>
            @error('categoria_id')
            <div class="small text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
</div>
@endsection
