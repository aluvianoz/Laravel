@extends('admin.template.main')
@section('title','Agregar Tag')
@section('panel','Agregar Tag')

@section('content')
<br>
{!!Form::Model($tag,['route'=>['admin.tags.update',$tag->id],'method' => 'PUT','class' => 'form-horizontal']) !!}
    <div class="form-group">
      {!!Form::label('name','Nombre',['class' => 'col-sm-3 col-xs-2 control-label'])!!}
      <div class="col-sm-5 col-xs-8">
      {!!Form::text('name',null, ['class'=> 'form-control', 'placeholder'=>'categoria'])!!}
    </div>
    </div>
    <div class="form-group">
      <div class="col-sm-6" style="text-align: center;">
      {!!Form::submit('Registrar',['class'=>'btn btn-default'])!!}
    </div>
    </div>
{!!Form::close()!!}
@endsection
