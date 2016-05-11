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
        {!!Form::select('category_id',$categories,null,['class' => 'form-control select-category','placeholder' => 'Seleccione una categoría','required'])!!}
    </div>

    <div class="form group">
      {!!Form::label('content','Contenido')!!}
      {!!Form::textarea('content',null,['class' => 'form-control textarea-content'])!!}

    </div>
    <div class="form-group">
      {!!Form::label('tags','Tag')!!}
        {!!Form::select('tags[]',$tags,null,['class' => 'form-control select-tag','required','multiple','data-placeholder'=>'Selecciona un máximo de 3 tags...'])!!}
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
@section('js')
<script type="text/javascript">
  $(".select-tag").chosen({
      max_selected_options: 3,
      no_results_text: "No hay resultados que coincidan con la búsqueda"
  });
  $(".select-category").chosen({
      no_results_text: "No hay resultados que coincidan con la búsqueda"
  });

  $('.textarea-content').trumbowyg();
</script>
@endsection
