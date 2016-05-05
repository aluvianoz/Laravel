@extends('admin/template/main')
@section('title','Lista de Usuarios')
@section('panel','Lista de Usuarios')
@section('content')
<br>
<a href="{{route('admin.users.create')}}" class="btn btn-default" id="nwusr">Registrar nuevo Usuario <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
<br>
<br>
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Tipo</th>
      <th>Accion</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            @if($user->type == "admin")
              <span class="label label-danger">{{$user->type}}</span>
            @else
              <span class="label label-primary">{{$user->type}}</span>
            @endif
            </td>
          <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          &nbsp;
          <a href="{{ route('admin.users.destroy', $user->id)}}" class="btn btn-danger" onclick="return confirm('¿deseas eliminar el usuario?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
      {!! $users->render() !!}
  </div>

@endsection
