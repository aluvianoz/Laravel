<div class="panel panel-danger" >
  <div class="panel-heading">Categorías</div>
  <div class="panel-body">
    <ul class="list-group">
      @foreach($categories as $category)
      <li class="list-group-item">
        <span class="badge">{{$category->articles->count()}}</span>
        {{$category->name}}
      </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="panel panel-success" >
  <div class="panel-heading">Tags</div>
  <div class="panel-body">
    @foreach($tags as $tag)
    <span class="label label-primary">{{$tag->name}}</span>
    @endforeach
</div>
</div>
