@extends('admin.template.main')
@section('title','Agregar Tag')
@section('panel','Agregar Tag')

@section('content')
<br>
{!!Form::open(['route'=>'admin.tags.store','method' => 'POST','class' => 'form-horizontal']) !!}
    <div class="form-group">
      {!!Form::label('name','Nombre',['class' => 'col-sm-3 col-xs-2 control-label'])!!}
      <div class="col-sm-5 col-xs-8">
      {!!Form::text('name',null, ['class'=> 'form-control', 'placeholder'=>'tag'])!!}
    </div>
    </div>
    <div class="form-group">
      <div class="col-sm-6" style="text-align: center;">
      {!!Form::submit('Registrar',['class'=>'btn btn-default'])!!}
    </div>
    </div>
{!!Form::close()!!}
@endsection
