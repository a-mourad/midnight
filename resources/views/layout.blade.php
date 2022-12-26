<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/resources/css/landing.css')}}">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Midnight Ser</title>

   
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <form class="container-fluid justify-content-start">
              <h1>Midnight</h1>

              @if ( Auth::guest() )
              <li class="signup-btn"><a href="">Sign Up</a></li>
              <li class="login-btn"><a href="">Log In</a></li>
          @else
             <!--<li class="logout-btn"><a href="">LogOut</a></li>--> 
              <a href="{{route('logout')}}" class="btn btn-primary">Logout</a><br>
             
          @endif

            </form> 
          </nav>
    </div>




<div class="container" id="hassa">
    
    @yield('content')

</div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>