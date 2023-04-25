@extends('template.layouts.login_layout')
@section('content')

<div class="row" id="row">
    <div class="col-md-6 mx-auto">
        <div class="btn-group d-flex">
            <a href="{{$form == 'login' ? url('/login') :  url('/register')}}">
                <button type="button" style="cursor: pointer;" class="btn btn-primary w-50">{{$form == 'login' ? 'Login' : 'Register'}}</button>
            </a>
            <a href="{{$form == 'register' ? url('/login') :  url('/register')}}">
                <button type="button"  style="cursor: pointer;" class="btn btn-secondary w-50">{{$form == 'register' ? 'Login' : 'Register'}}</button>
            </a>
        </div>
        <h3 class="text-center mb-4">Browse 33,000 vendor profile and reviews.</h3>
        <p class="text-muted">We don't post anything without you permission.</p>
        

        @if(\Session::has('message'))
        <div>
            <script>
                alert('{{\Session::get('message')}}')
            </script>
        </div>
    @endif

    @if ($form == 'login')
    <form action="{{ url('postLogin')}}" method="POST">
        @csrf
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="email"><br>
                @if($errors->has('email'))
                    <label style="color:red">{{ $errors->first('email')}}</label>
                @endif
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="password"><br>
                @if($errors->has('password'))
                    <label style="color: red">{{ $errors->first('password')}}</label>
                @endif
            </div>
            <p class="text-muted mt-3">forgot Your Password? <strong>Click here</strong> </p>
            <button type="submit" class="btn btn-block mt-3">Login</button>
    </form>
    @else
    <form action="{{url('postRegister')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="first_name"   placeholder="First Name"><br>
            @if($errors->has('first_name'))
            <span style="color: red">{{$errors->first('first_name')}}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="text" name="last_name"  placeholder="Last Name"><br>
            @if($errors->has('last_name'))
            <span style="color: red">{{$errors->first('last_name')}}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="email"><br>
            @if($errors->has('email'))
                <label style="color:red">{{ $errors->first('email')}}</label>
            @endif
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="password"><br>
            @if($errors->has('password'))
                <label style="color: red">{{ $errors->first('password')}}</label>
            @endif
        </div>
            <p class="text-muted mt-3">forgot Your Password? <strong>Click here</strong> </p>
            <button type="submit" class="btn btn-block mt-3">Register</button>
    </form>
    @endif

        <h4 class="text-center mt-5">Social Login</h4>
        <div class="d-flex justify-content-around " id="btn">
            <button class="fab fa-facebook"></i><span>Continue With<strong> Facebook</strong></span></button>
            <button class="fab fa-google"></i><span>Continue With <strong>Google</strong></span></button>
            <button class="fab fa-twitter"></i><span>Continue With <strong>Twitter</strong></span></button>
        </div>
    </div>
</div>


@endsection