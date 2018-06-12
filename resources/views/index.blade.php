<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
  </head>
  <body>
    @include('layouts.head')
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

  </script>
    </body>
</html>
