<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
        'resources/css/bootstrap/bootstrap-grid.min.css',
        "resources/css/search.css",
        "resources/css/layout.css",
        "resources/css/bootstrap/all.min.css",
        "resources/js/bootstrap/all.min.js",
        "resources/js/bootstrap/bootstrap.bundle.min.js"
        ])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">
    
    <title>Midnight App</title>

</head>
<body>
    
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="#">Midnight</a>
                  <div class="collapse navbar-collapse" id="main">
                    <div class="navbar-nav">

            @if (Auth::guest())

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <a class="nav-item nav-link active" href="#">Home</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="#">Clinets</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="#">Services</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="#">Sign Up</a>
                </li>
                <li>
                    <a class="nav-btn nav-link" href="#">Log In</a> 
                </li>
                  
            </ul>
          
          @else
             <!--<li class="logout-btn"><a href="">LogOut</a></li>--> 
              <a href="{{route('logout')}}" class="btn nav-link">Logout</a><br>
  
          @endif
                    </div>
                  </div>

        </div>
          </nav>


          



<div class="container" id="hassa">
    
    @yield('content')

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>