@extends('admin.template.main');
@section('titlle', 'Agregar Artículo')
@section('panel','Agregar Artículo')
@section('content')
  {!!Form::open(['route'=>'admin.articles.store', 'method' => 'POST', 'files'=> true])!!}
    <div class="form-group">
      {!!Form::label('title', 'Título')!!}
      {!!Form::text('title',null, ['class'=>'form-control', 'required', 'placeholder' => 'Título del articulo...'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('category_id','categoría')!!}
        {!!Form::select('category_id',$categories,null,['class' => 'form-control','placeholder' => 'Seleccione una categoría','required'])!!}
    </div>

    <div class="form group">
      {!!Form::label('content','Contenido')!!}
      {!!Form::textarea('content',null,['class' => 'form-control'])!!}

    </div>
    <div class="form-group">
      {!!Form::label('tags','Tag')!!}
        {!!Form::select('tags',$tags,null,['class' => 'form-control','required','multiple'])!!}
    </div>

    <div class="form-group">
      {!!Form::label('image','Imagen')!!}
      {!!Form::file('image')!!}

    </div>

    <div class="form-group">
      {!!Form::submit('Agregar Artículo',['class' => 'btn btn-default'])!!}

    </div>

  {!!Form::close()!!}

@endsection
