<div class="panel panel-danger" >
  <div class="panel-heading">Categorías</div>
  <div class="panel-body">
    <ul class="list-group">
      @foreach($categories as $category)
      <li class="list-group-item">
        <span class="badge">{{$category->articles->count()}}</span>
        <a href="{{route('front.search.category', $category->name)}}">{{$category->name}}</a>

      </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="panel panel-success" >
  <div class="panel-heading">Tags</div>
  <div class="panel-body">
    @foreach($tags as $tag)
    <span class="label label-primary"><a href="{{route('front.search.tag', $tag->name)}}">{{$tag->name}}</a></span>
    @endforeach
</div>
</div>
