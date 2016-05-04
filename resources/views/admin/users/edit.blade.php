@extends('admin.template.main')
@section('title', 'Editar Usuario')
@section('panel','Editar Usuario '. $user->name)
@section('content')
<br>
  {!! Form::Model($user,['route' => ['admin.users.update',$user->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

  <div class="form-group">
      {!! Form::label('name', 'Nombre' , ['class' => 'col-sm-2 col-xs-2 control-label'])!!}
      <div class="col-sm-5 col-xs-8">
            {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nombre Completo' ,  'required'])!!}
      </div>

  </div>

  <div class="form-group">
      {!! Form::label('email', 'Email' ,['class' => 'col-sm-2 col-xs-2 control-label'])!!}
        <div class="col-sm-5 col-xs-8">
      {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
    </div>
  </div>

  

  <div class="form-group">
      {!! Form::label('type', 'Tipo' ,['class' => 'col-sm-2 col-xs-2 control-label'])!!}
      <div class="col-sm-5 col-xs-8">
      {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'] ,null , ['class' => 'form-control'])!!}
      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-6" style="text-align: center;">
      {!! Form::submit('Crear', ['class' => 'btn btn-default'])!!}
    </div>
  </div>

  {!! Form::close() !!}

@endsection
