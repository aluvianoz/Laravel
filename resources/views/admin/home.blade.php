@extends('admin/template.main')
@section('title','Administración')
@section('panel','Inicio')



@section('content')
<h1>Bienvenido al panel de Administración!</h1>
<hr>
<br>
@if(Auth::user()->admin())
<a href="{{route('admin.users.create')}}" class="btn btn-primary">Crear Usuario</a>
@endif
<a href="{{route('admin.categories.create')}}" class="btn btn-success">Crear Categoría</a>
<a href="{{route('admin.tags.create')}}" class="btn btn-warning">Crear Tag</a>
<a href="{{route('admin.articles.create')}}" class="btn btn-danger">Crear Artículo</a>
@endsection
