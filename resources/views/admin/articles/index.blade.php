@extends('admin/template/main')
@section('title','Lista de Artículos')
@section('panel','Lista de Artículos')
@section('content')
<br>
<a href="{{route('admin.articles.create')}}" class="btn btn-default  pull-right" >Crear Nuevo Artículo <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
<!--buscador de articulos-->
    {!!Form::open(['route' => 'admin.articles.index','method' => 'GET','class'=>"navbar-form pull-left"])!!}
      <div class="input-group">
        {!!Form::text('title',null, ['class' =>'form-control', 'placeholder' => 'Buscar articulo...','aria-describedby'=>'search'])!!}
        <span class="input-group-addon" id="search" onclick="return "><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
      </div>
    {!!Form::close( )!!}

<!--fin del buscador-->
<br>
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Título</th>
    <th>Categoría</th>
    <th>Usuario</th>
    <th>Acción</th>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <td>{{$article->id}}</td>
      <td>{{$article->title}}</td>
      <td>{{$article->category->name}}</td>
      <td>{{$article->user->name}}</td>
      <td>
        <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
        <a href="{{route('admin.articles.destroy', $article->id)}}" class="btn btn-danger" onclick="return confirm('¿Deseas liminar la categoría?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {!! $articles->render() !!}
</div>
@endsection
