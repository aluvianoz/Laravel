@extends('admin/template/main')
@section('title','Lista de Tags')
@section('panel','Lista de Tags')
@section('content')
<br>
<a href="{{route('admin.tags.create')}}" class="btn btn-default  pull-right" id="nwusr">Crear Nuevo Tag <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

<!--buscador de tags-->
    {!!Form::open(['route' => 'admin.tags.index','method' => 'GET','class'=>"navbar-form pull-left"])!!}
      <div class="input-group">
        {!!Form::text('name',null, ['class' =>'form-control', 'placeholder' => 'Buscar tag...','aria-describedby'=>'search'])!!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
      </div>
    {!!Form::close( )!!}

<!--fin del buscador-->
<br>
<table class="table table-striped">
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Acción</th>
  </thead>
  <tbody>

      @foreach($tags as $tag)
      <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->name}}</td>
        <td>
          <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="{{route('admin.tags.destroy', $tag->id)}}" class="btn btn-danger" onclick="return confirm('¿Deseas liminar el tag?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
        </td>
      </tr>
      @endforeach

  </tbody>
</table>
<div class="text-center">
  {!! $tags->render() !!}
</div>


@endsection
