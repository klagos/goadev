<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Game Over Addiction</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/coin-slider.css')}}" />
<script type="text/javascript" src="{{ asset('js/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cufon-yanone.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/coin-slider.min.js') }}"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="{{ asset('images/search.gif') }}" class="button_search" type="image" />
        </form>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.blade.php"><span>Home Page</span></a></li>
          <li><a href="about.html"><span>Acerca de nosotros</span></a></li>
          <li><a href="{{ route('users.index') }}"><span>Usuarios</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      @yield('logo')
      @show
      <div class="clr"></div>
      @yield('slider')
      @show
      <div class="clr"></div>
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

