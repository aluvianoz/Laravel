@extends('admin.template.main')
@section('title', 'Crear Usuario')
@section('content')

  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

  <div class="form-group">
      {!! Form::label('name', 'Nombre')!!}
      {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nombre Completo', 'required'])!!}
  </div>

  <div class="form-group">
      {!! Form::label('email', 'email')!!}
      {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
  </div>

  <div class="form-group">
      {!! Form::label('password', 'Contraseña')!!}
      {!! Form::password('pasword', ['class'=> 'form-control', 'placeholder' => '********', 'required'])!!}
  </div>

  <div class="form-group">
      {!! Form::label('type', 'Tipo')!!}
      {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'] ,null , ['class' => 'form-control'])!!}
  </div>

  <div class="form-group">
      {!! Form::submit('Crear', ['class' => 'btn btn-default'])!!}

  </div>

  {!! Form::close() !!}

@endsection
