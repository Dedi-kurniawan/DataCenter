@extends('layouts.login')
@section('maincontent')

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
              <h1>Login Form</h1>
              <div>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" name="email" class="form-control" value="{{ old('email') }}"  placeholder="Email" required="" />
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
               </div>
              </div>
              <div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                    @if ($errors->has('password'))
                       <span class="help-block"><strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

              <h1>Create Account</h1>
              <div>
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Username" required="" />
                      @if ($errors->has('name'))
                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                      @endif
                 </div>
              </div>
              <div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required="" />
                     @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> 
                     @endif
                </div>
              </div>
              <div>
                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                     @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif
                 </div>
              </div>
              <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="password_confirmation">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Daiwabo</h1>
                  <p>©2016 All Rights Reserved. Daiwabo</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>





@endsection
