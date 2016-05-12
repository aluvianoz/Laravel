@extends('admin.template.main');
@section('titlle', 'Editar Artículo')
@section('panel','Editar Artículo '. $article->title)
@section('content')
  {!!Form::open(['route'=>['admin.articles.update',$article], 'method' => 'PUT'])!!}
    <div class="form-group">
      {!!Form::label('title', 'Título')!!}
      {!!Form::text('title',$article->title, ['class'=>'form-control', 'required', 'placeholder' => 'Título del articulo...'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('category_id','categoría')!!}
        {!!Form::select('category_id',$categories,$article->category->id,['class' => 'form-control select-category','placeholder' => 'Seleccione una categoría','required'])!!}
    </div>

    <div class="form group">
      {!!Form::label('content','Contenido')!!}
      {!!Form::textarea('content',$article->content,['class' => 'form-control textarea-content'])!!}

    </div>
    <div class="form-group">
      {!!Form::label('tags','Tag')!!}
        {!!Form::select('tags[]',$tags,$my_tags,['class' => 'form-control select-tag','required','multiple','data-placeholder'=>'Selecciona un máximo de 3 tags...'])!!}
    </div>


    <div class="form-group">
      {!!Form::submit('Editar',['class' => 'btn btn-default'])!!}

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
