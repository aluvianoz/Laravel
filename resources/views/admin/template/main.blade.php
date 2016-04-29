<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Panel de administracion')</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      @include('admin.template.partials.nav')
    </header>

      <section>
        @yield('content')
      </section>

      <footer>
        @include('admin.template.partials.footer')
      </footer>

<script src="{{asset('plugins/JQuery/js/jquery-2.2.3.js')}}" charset="utf-8"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}" charset="utf-8"></script>
  </body>
</html>
