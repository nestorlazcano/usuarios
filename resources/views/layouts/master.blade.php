<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Users::@yield('title')::</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div id="navbar" class="navbar-collapse collapse">
        
                 <!-- Authentication Links -->
              @if (Auth::guest())
                  <!--<li><a href="{{ url('/login') }}">Ingresar</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>-->
              @else
               <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url("/home")}}">Home</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  @if (Auth::user()->admin())
                    <li><a href="{{route("users.index")}}">Usuarios</a></li>
                  @endif
                  
                  <li><a href="{{route("roles.index")}}">Roles</a></li>
                  <li><a href="{{route("modulos.index")}}">Modulos</a></li>
                  @if (Auth::user()->admin())
                    <li><a href="{{route("historial.index")}}">Historial</a></li>
                  @endif
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                      </ul>
                  </li>
              @endif
               </ul>
        </div><!--/.nav-collapse -->



      </div>
    </nav>



    <div class="container">
      @yield('content')


    </div> <!-- /container -->
    </body>
</html>
