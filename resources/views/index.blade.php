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
      <div class="logo">
        <h1><a href="index.blade.php">Game Over Addiction <small><img src="{{asset('images/logogoa.jpg')}}" width="75" height="75" alt="" class="gal" /></a></small></a></h1>
      </div>
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
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="{{asset('images/gal1.jpg')}}" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{ asset('images/gal2.jpg') }}" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{asset('images/gal3.jpg')}}" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{asset('images/gal4.jpg')}}" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{asset('images/gal5.jpg')}}" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="{{asset('images/gal6.jpg')}}" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
