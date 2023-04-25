

<h1>hello from new register</h1>

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
                <input type="password" name="password" id="" placeholder="password">
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

