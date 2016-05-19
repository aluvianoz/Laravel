<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" media="screen" title="no title" charset="utf-8">
    <title>Acceso restringido</title>

  </head>
  <body>



    <section>
      <div class="jumbotron">
        <div class="container">
          <h1>Acceso restringido!!</h1>
          <p>
            No tienes los permisos necesarios para acceder, contacta al administrador del sistema.
          </p>
          <hr>
          <p><a class="btn btn-danger btn-lg" href="{{route('front.index')}}" role="button">Inicio</a></p>
        </div>
      </div>
    </section>

    <footer>

    </footer>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}" charset="utf-8"></script>
  </body>
</html>
