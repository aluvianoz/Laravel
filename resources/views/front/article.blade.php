@extends('front.template.main')
@section('title',$article->title)
@section('content')
<div class="panelblog">


<div class="panel panel-primary ">

  <div class="panel-body">

    <h3 class="text-left">{{$article->title}}</h3>
    <hr>

      @foreach($article->images as $image)
      <div class="thumbnail">
      <img src="{{asset('images/articles/'.$image->name)}}" alt="$article->title">
        </div>
      @endforeach

    <p>
      {!!$article->content!!}
    </p>

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
  <div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//maximalblog.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</div>


</div>
<div class="panelateral">
  @include('front.template.partials.lateral')
</div>
@endsection
