<!DOCTYPE html>
<html>
    <head>
    <title>
        @yield('title')
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
        <div class="jumbotron text-center">
        <h1>Movie database</h1>
        </div>  
            @yield('content')
        </div>
    </body>
</html>
