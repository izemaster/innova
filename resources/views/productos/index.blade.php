@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-primary" role="alert">
    {{Session::get('success')}}
</div>
@endif

<div class="d-flex justify-content-between align-items-center mx-5">
    <form action="{{route('productos.index')}}" method="GET">
        <span>Filtrar Categoria:</span>
        <select name="categoria_id" id="categorias-filter">
            <option value="" {{!isset($categoria_selected) ? 'selected' : ''}}>Todas</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}" {{$categoria_selected == $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
            @endforeach
        </select>
        </form>
    <a href="{{route('productos.create')}}" type="button" class='btn btn-primary'>Nuevo</a>
</div>

<div class="d-flex align-items-center justify-content-center">
<table class="table table-striped mx-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Categoria</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->categoria->nombre}}</td>
            <td>
                <a href="{{route('productos.edit',$producto)}}" class='btn btn-primary'>Editar</a>
                <form action="{{route('productos.destroy',$producto)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class='btn btn-danger'>Eliminar</a>
                </form>
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>
</div>
<div class="d-flex justify-content-end align-items-center mx-5">
    <span>Productos : {{$productos->count()}}</span>
</div>
<script>
    var select = document.getElementById('categorias-filter');
    select.addEventListener('change', function(){
    this.form.submit();
}, false);
</script>
@endsection
