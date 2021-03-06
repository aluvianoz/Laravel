@extends('front.template.main')

<!--wdwedwdedwedwededew-->
@section('content')
<div class="panelblog">

@foreach($articles as $article)
<div class="panel panel-primary ">
  <div class="panel-heading"><a href="{{route('front.view.article', $article->slug)}}">{{$article->title}}</a></div>
  <div class="panel-body">
    <div class="col-md-12"><!--div de ejemplo-->

    <a href="{{route('front.view.article', $article->slug)}}" class="thumbnail">
      @foreach($article->images as $image)
      <img src="{{asset('images/articles/'.$image->name)}}" alt="...">
      @endforeach
    </a>
    </div>
    <h3 class="text-center">{{$article->content}}</h3>
    <hr>
    <div class="pull-left">
      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      <a href="{{route('front.search.category', $article->category->name)}}">{{$article->category->name}}</a>
    </div>
    <div class="pull-right">
      <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
      {{$article->created_at->diffForHumans()  }}
    </div>
  </div>
</div>
@endforeach

</div>

<div class="panelateral">
  @include('front.template.partials.lateral')
</div>
<div class="text-center">
  {!!$articles->render()!!}
</div>

@endsection
