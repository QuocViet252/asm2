@extends('layouts.auth')

@section('content')
<div id="wrap">
    <form method="post" action="{{url('login')}}">
    @csrf
        <div class="mainSignUp">
           

            <h1>Sign In</h1>
            <p>Please fill in this form to create an account.</p>
            
            <div class="email_login">
                <label for="email"><b>Email</b></label>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="pws_login">
            
            <label for="psw"><b>Password</b></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            

            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            

            <div class="clearfix">
            
              <button type="submit" class="signupbtn">Sign In</button>
            </div>
        </div>
    </form>

</div>

@endsection
