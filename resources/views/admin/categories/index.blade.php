@extends('admin/template/main')
@section('title','Lista de categorías')
@section('panel','Lista de Categorías')
@section('content')
<br>
<a href="{{route('admin.categories.create')}}" class="btn btn-default" id="nwusr">Crear Nueva categoría <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
<table class="table table-striped">
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Acción</th>
  </thead>
  <tbody>

      @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>
          <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="{{route('admin.categories.destroy', $category->id)}}" class="btn btn-danger" onclick="return confirm('¿Deseas liminar la categoría?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
        </td>
      </tr>
      @endforeach

  </tbody>
</table>
<div class="pagination">
  {!! $categories->render() !!}
</div>


@endsection
