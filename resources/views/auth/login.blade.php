<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/icon-line-pro/style.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <div class="login-area">
      <div class="grid">
        <div class="left-side span-col-2">
          <div class="row">
            <div class="col l2"></div>
            <div class="col s12 l8">
              <div class="top-text-left">
                <h1>Company Name</h1>

                <h2>Learning Management System</h2>
              </div>
            </div>
          </div>

          <div class="row bottom-part">
            <div class="col s12 center">
              <ul>                 
                <li><a href="">Contact Us</a></li>
                <li>&#8226;</li>
                <li><a href="">Cookies</a></li>
                <li>&#8226;</li>
                <li><a href="">Privacy Policy & Terms of Use</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="right-side span-col-2">
          <div class="inner-area">
            <div class="row">
              <div class="col m3"></div>
              <div class="col s12 m6">

                <form class="login_form" action="{{ route('login') }}" method="POST">
                @csrf
                  <div class="row">
                    <div class="col s12">
                      <div class="top-text">
                        <h3>Welcome,</h3>
                        <p>Please Login to Continue</p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>          
                      <input id="username" name="username" type="text" class="validate{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" required autofocus>
                      <label for="username">Username</label>
                      @if ($errors->has('username'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('username') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">lock_outline</i>
                      <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      <label for="password">Password</label>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12">
                      <br>
                      <button class="waves-effect waves-light btn-large full-width z-depth-4" type="submit">Sign In</button>
                    </div>
                  </div>

                </form>
                <br>

                <div class="row center">
                  <div class="col s12">
                    <a class="forgot-pass" href="{{ route('password.request') }}">Forgot Password?</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row bottom-part">
            <div class="col s12 center">
              <p class="copyright">Copyright &copy; 2017 The Write Connections. All Rights Reserved</p>
            </div>
          </div>

        </div>
      </div>
    </div>

  <body>

  <!--JavaScript at end of body for optimized loading-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

  </body>
</html>