<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/resources/css/register.css')}}">
    <title>Midnight | register</title>
</head>
<body>
<div class="container-nav">
    <div class="top-logo">
        <h2>Midnight</h2>
    </div>
    <div class="top-nav">
        <ul>
            <li><a href="http://" target="_blank" rel="noopener noreferrer"> Acount</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer"> Contact us</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer"> Help ?</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="container-holder">
        <h3>Company Holder informations:</h3>
        <form action="{{url('postRegister')}}" method="POST">
            @csrf


            <div class="x0">  
                <label for="first_name">First Name&emsp;&emsp;&nbsp;:</label>
                <input type="text" name="first_name" id="" placeholder="First name">
                @if($errors->has('first_name'))
                    <span style="color: green">{{$errors->first('first_name')}}</span>
                @endif
            </div>

            <div class="x0">  
                <label for="last_name">Last Name&emsp;&emsp;&nbsp;:</label>
                <input type="text" name="last_name" id="" placeholder="Last name">
                @if($errors->has('last_name'))
                    <span style="color: green">{{$errors->first('last_name')}}</span>
                @endif
            </div>

            <div class="x3">   <label for="email">Email&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label>
                <input type="email" name="email" id="" placeholder="email">
                @if($errors->has('email'))
                    <span style="color: green">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="x3">   <label for="password">password&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label>
                <input type="password" name="password" id="" placeholder="email">
                @if($errors->has('password'))
                    <span style="color: green">{{$errors->first('password')}}</span>
                @endif
            </div>

            <button id="btn-submit" type="submit">Submit</button>

        </form>
    </div>
    <div class="include-company">
        <h5>You got a company??</h5>
        <a href="/sign up/company.html">inter you're companys' infos</a>
    </div>
</div>
<footer>
    <div class="head">
        <h1>Midnight</h1>
    </div>
    <div class="footerBody">
        <div class="list">
            <h2>about</h2>
            <ul>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
            </ul>
        </div>
        <div class="list">
            <h2>policy</h2>
            <ul>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
            </ul>
        </div>
        <div class="list">
            <h2>company</h2>
            <ul>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
            </ul>
        </div>
        <div class="list">
            <h2>clients</h2>
            <ul>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
                <li>servise</li>
            </ul>
        </div>
    </div>
    <div class="contact">
        <div class="sm">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-solid fa-envelopes-bulk"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
        <div class="subs">
            <label for="email">subscribe</label>
            <input type="email" name="" id="" placeholder="GET IN TOUCH">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cumque accusantium alias, eos dignissimos debitis iusto ullam ea soluta, eius recusandae? Ratione, qui quod. </p>
        </div>
    </div>
    <div class="copyright">
        <p>2022 <i class="fa fa-copyright" aria-hidden="true"></i> midnight-All rights reserved-Terms of Use-Privacy Policy </p>
    </div>
</footer>

</body>
</html>
