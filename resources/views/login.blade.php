<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/resources/css/login.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>midnight | login</title>
</head>
<body>
    <div class="container">
        <div class="container-left">
            <div class="para">
            <h4>Welcome to</h4>    
            <h1>Midnight</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sequi culpa recusandae aperiam. In illum, nihil debitis iusto reiciendis perspiciatis ducimus quae, odit ipsa non quo molestias perferendis similique praesentium!</p>
        </div>
        </div>
        <div class="container-box">
            <div class="top">                
                <h1>Sign in <i class="fa-solid fa-right-to-bracket"></i></h1>
                <input type="email" name="email" id="email" placeholder="email"><br>
                <input type="password" name="password" id="password" placeholder="password"><br>
                <a href="http://" target="_blank" rel="noopener noreferrer">Forgot password?</a><br>
                <button type="submit">sign in</button>
            </div>
            <div class="login-options">
                <h4>or</h4>
                <ul>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-envelope-open-text"></i></a></li>
                    <li><a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <hr class="devider">
            <div class="bottom">
                <h6>New to Midnight ?</h6>
                <a href="/sign up/index.html" target="_blank" rel="noopener noreferrer">Sign Up</a>
            </div>
            <div class="contact">
                <ul>
                    <li>Copyright</li><span class="material-symbols-outlined">
                        more_vert
                        </span>
                    <li>Contact us</li><span class="material-symbols-outlined">
                        more_vert
                        </span>
                    <li>About</li>
                </ul>
            </div>
        </div>
        <div class="container-right"></div>
    </div>
    <div class="contact1">
        <ul>
            <li>Copyright</li>
            <li>Contact us</li>
            <li>About</li>
        </ul>
    </div>

    <script src="https://kit.fontawesome.com/ce35cf2649.js" crossorigin="anonymous"></script>

</body>
</html>