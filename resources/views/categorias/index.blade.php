@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-primary" role="alert">
    {{Session::get('success')}}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{Session::get('error')}}
</div>
@endif
<div class="d-flex justify-content-end align-items-center mx-5">
    <a href="{{route('categorias.create')}}" type="button" class='btn btn-primary'>Nuevo</a>
</div>

<div class="d-flex align-items-center justify-content-center">
<table class="table table-striped mx-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <th scope="row">{{$categoria->id}}</th>
            <td>{{$categoria->nombre}}</td>

            <td>
                <a href="{{route('categorias.edit',$categoria)}}" class='btn btn-primary'>Editar</a>
                <form action="{{route('categorias.destroy',$categoria)}}" method="POST" class="d-inline">
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
    <span>Categorias : {{$categorias->count()}}</span>
</div>
@endsection
