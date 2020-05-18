<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avaliacao Web</title>
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/prova.css') }}" rel="stylesheet">
  </head>

  <body>

    <!-- Aqui vai o layout filho -->
    @yield('conteudo')

    <script src="{{ URL::to('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}" type="text/javascript"></script>
  </body>
</html>

