<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>
            @yield('title')
        </title>
        <link href="{{ URL::asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron text-center">
                <h1><a href="/">Movie database</a></h1>
            </div>

            <div class="row">
                @yield('content')
            </div>
            <footer>
              <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col col-xs-12 text-center">
                        Created by Lukáš Danko @ 2016
                      </div>
                      <div class="col col-xs-12 text-center">
                        <a href="https://github.com/shokker/movie_database"><i class="fa fa-github"> </i> project repository</a>
                      </div>

                    </div>

                  </div>
              </div>
            </footer>
        </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

    @include('partials/script')
</html>
