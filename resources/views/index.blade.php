<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Game Over Addiction</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/coin-slider.css')}}" />
<script type="text/javascript" src="{{ asset('js/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cufon-yanone.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/coin-slider.min.js') }}"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.blade.php"><span>Home Page</span></a></li>
          <li><a href="about.html"><span>Acerca de nosotros</span></a></li>
          <li><a href="{{ route('users.index') }}"><span>Usuarios</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
            <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
            </li>
            </ul>
            </li>
            @endguest
        </ul>
      </div>
      <div class="clr"></div>
      @yield('logo')
      @show
      <div class="clr"></div>
      @yield('slider')
      @show
      <div class="clr"></div>
      @yield('registro')
      @show
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      @yield('content')
      @show
    </div>
  </div>
  @yield('footer')
  @show
</body>
</html>

