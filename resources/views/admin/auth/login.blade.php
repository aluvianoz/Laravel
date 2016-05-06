@extends('admin.template.main')
@section('title','Login')
@section('panel','login')
@section('content')
{!!Form::open(['route'=> 'admin.auth.login', 'method' => 'POST', 'class' => 'form-horizontal'])!!}
<div class="form-group">
    {!! Form::label('email', 'Email' ,['class' => 'col-sm-2 col-xs-2 control-label'])!!}
      <div class="col-sm-5 col-xs-8">
    {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña' ,['class' => 'col-sm-2 col-xs-3 control-label'])!!}
    <div class="col-sm-5 col-xs-7">
    {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => '********', 'required'])!!}
    </div>
</div>

<div class="form-group">
  <div class="col-sm-6" style="text-align: center;">
    {!! Form::submit('Entrar', ['class' => 'btn btn-default'])!!}
  </div>
</div>

{!!Form::close()!!}
@endsection
