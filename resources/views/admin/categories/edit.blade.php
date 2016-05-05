@extends('admin.template.main')
@section('title','Agregar Categoria')
@section('panel','Agregar Categoria')

@section('content')
<br>
{!!Form::Model($category,['route'=>['admin.categories.update',$category->id],'method' => 'PUT','class' => 'form-horizontal']) !!}
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
