<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Panel de administracion')</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/general.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{asset('plugins/trumbowyg/dist/ui/trumbowyg.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
    <header>
      @include('admin.template.partials.nav')
    </header>

      <div class="panel panel-default">
         @include('flash::message')
         @include('admin.template.partials.errors')
        <div class="panel-heading">@yield('panel')</div>
        <div class="panel-body">
        @yield('content')
      </div>
      </div>

      <footer>
        @include('admin.template.partials.footer')
      </footer>

      <script src="{{asset('plugins/JQuery/js/jquery-2.2.3.js')}}" charset="utf-8"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}" charset="utf-8"></script>
      <script src="{{asset('plugins/chosen/chosen.jquery.js')}}" charset="utf-8"></script>
      <script src="{{asset('plugins/Trumbowyg/dist/trumbowyg.js')}}" charset="utf-8"></script>
      @yield('js')
  </body>
</html>
