<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <figure id="imgnav">
        <img alt="Admin" src="{{asset('images/autobot.ico')}}" >
      </figure>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
@if(Auth::user())
        <li><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{route('admin.categories.index')}}">Categorías</a></li>
        <li><a href="#">Artículos</a></li>
        <li><a href="#">Imágenes</a></li>
        <li><a href="#">Tags</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right ">
        <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Página principal</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
          <ul class="dropdown-menu ">
            <li><a href="{{route('admin.auth.logout')}}">Salir</a></li>

          </ul>
        </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
