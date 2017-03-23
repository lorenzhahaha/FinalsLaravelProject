@extends('layouts.app')

@section('content')
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="logo-2"> 
                                <img src="{{ URL::asset('img/final-logo-2.png') }}">
                            </div>
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3 style="color: #3e2f2c;">Already member of the family?</h3>
                                        <p>Enter username and password to sign in:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key" style="color: #3e2f2c;"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        

                                        @if(!empty($wrongSignin))
                                        <div class="col-md-9 margin-left-80">
                                            <i class="fa fa-exclamation-triangle excla-fav"></i>
                                            <p class="word-excla-fav"> Ooops! </p>
                                            <div class="alert alert-danger signin-error">
                                                <h3> {{ $wrongSignin }} </h3>
                                                <h4> {{ $wrongSignin_2 }} </h4>
                                            </div>
                                        </div>
                                        @endif
                                        
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="sr-only">Username</label>
                                            <input id="username" type="text" class="form-control form-username" placeholder="Username ..." name="username" value="{{ old('username') }}">
                                            
                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="sr-only">Password</label>
                                            <input id="password" type="password" class="form-control form-password" placeholder="Password ..." name="password">
                                            
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn signin-button">
                                                Sign in!
                                            </button>
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <br><br>
                                            <center>
                                                <a class="btn btn-danger forgot-button" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                            <div class="social-login">
                                <h3 style="color: #3e2f2c;">... or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                            <div class="invite">    
                                <img src="{{ URL::asset('img/invite.png') }}" width="400px" alt="">
                            </div>
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3 style="color: #3e2f2c;">Wanna join our community?</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil" style="color: #3e2f2c;"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">

                                    <form role="form" action="{{ route('register') }}" method="POST" class="registration-form">
                                        {{ csrf_field() }}
                                        <div id="FirstStep">
                                            <div class="form-group{{ $errors->has('first-name') ? ' has-error' : '' }}">
                                                <label for="fname" class="sr-only">First Name</label> 
                                                <input placeholder="First Name ..." id="fname" type="text" oninput="CheckInput()" class="form-control form-first-name" name="first-name" value="{{ old('first-name') }}" >
                                                 @if ($errors->has('first-name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('first-name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>                                                
                                            <div class="form-group{{ $errors->has('last-name') ? ' has-error' : '' }}">
                                                <label for="lname" class="sr-only">Last Name</label>
                                                <input placeholder="Last Name ..." id="lname" type="text" oninput="CheckInput()" class="form-control form-last-name" name="last-name" value="{{ old('last-name') }}" >
                                                @if ($errors->has('last-name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('last-name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="sr-only">E-Mail Address</label>
                                                <input placeholder="Email ..." id="email" type="text" oninput="CheckInput()" class="form-control form-email" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('about-yourself') ? ' has-error' : '' }}">
                                                <label for="aboutyourself" class="sr-only">About Yourself</label>   
                                                <input placeholder="About yourself ...  (e.g. My favorite color is brown)" id="aboutyourself" type="text" oninput="CheckInput()" style="height: 100px" class="form-control form-about-yourself" name="about-yourself" value="{{ old('about-yourself') }}">
                                                @if ($errors->has('about-yourself'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('about-yourself') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <button id="NextStep" disabled="disabled" type="button" class="btn signin-button" >Next Step</button>
                                        </div>

                                        <div id="SecondStep">
                                            <button id="BackButton" type="button" class="btn signin-button back" ><i class="fa fa-arrow-left col"></i></button>
                                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                <label for="username" class="sr-only">Username</label>
                                                <input placeholder="Username ..." id="username" type="text" oninput="CheckLastInput()" class="form-control form-username" name="username" value="{{ old('username') }}">
                                                @if ($errors->has('username'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="form-password" class="sr-only">Password</label>
                                                <input placeholder="Password ..." id="password" type="password" oninput="CheckLastInput()" class="form-control form-password" name="password">
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password-confirm" class="sr-only">Confirm Password</label>
                                                <input placeholder="Confirm Password ..." id="password-confirm" type="password" oninput="CheckLastInput()" class="form-control" name="password_confirmation">
                                            </div>

                                            <button id="LastStep" disabled="disabled" type="submit" class="btn signin-button" >I'm joining in!</button>
                                       </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

        <!-- Footer -->
        <div class="object-img">    
            <img src="{{ URL::asset('img/object-bg.png') }}" width="500px" height="auto">
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="footer-border"></div>
                            <p>
                                <i class="fa fa-copyright">&nbsp;2017 </i>&nbsp; Daily Bread | (+63)935-360-8555 | Apalit, Pampanga, Philippines 
                            </p>
                    </div>
                    
                </div>
            </div>
        </footer>

        <img class="background-img" src="{{ URL::asset('img/drawing-bg.png') }}">
@endsection
