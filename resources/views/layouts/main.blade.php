<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <nav class="nav-extended">

      <div class="nav-wrapper">
        <a href="{{url('/Home')}}" class="brand-logo"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
        <a href="#" class="menu-mid center">Chatswood <img src="{{asset('assets/img/middle_menu.png')}}" alt=""></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><img src="{{asset('assets/img/help.png')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('assets/img/dashboard.png')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('assets/img/calendar.png')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('assets/img/notifications.png')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('assets/img/user.png')}}" alt=""></a></li>
          <li>
            <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <img src="{{asset('assets/img/logout.png')}}" alt="">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
        </ul>
      </div>

    </nav>

    @yield('content')

    <!-- Main wrapper End -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
    <script>

    </script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

    @yield('add_js')

  </body>
</html>