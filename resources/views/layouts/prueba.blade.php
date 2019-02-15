@extends('index')

@section('slider')
    <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="{{ asset('images/portada.jpg') }}" width="960" height="320" alt="" /><span><big>Bienvenido a nuestra página!</big><br />
          Nueva pàgina de GOA. Nos alegra bastante que estés visitando la página, crea una cuenta de usuario y cualquier duda por favor comunícate directamente con nosotros</span>
            </a> <a href="#"><img src="{{asset('images/tiendapubg.jpg')}}" width="960" height="320" alt="" /><span><big>Estamos afiliados con TIENDA PUBG</big><br />  Tienda PUBG además de realizar ventas, también está en contacto con nosotros, realizando torneos y sorteos para la gente de la comunidad</span>
            </a> <a href="#"><img src="{{asset('images/steam.png')}}" width="960" height="320" alt="" /><span><big>PRONTO! Ventas Steam.</big><br />
          Pronto se comenzarán a vender juegos de Steam mucho más baratos que en la tienda de la plataforma de Steam, atentos a nueva información.</span></a> </div>
        <div class="clr"></div>
    </div>
@endsection

@section('logo')
      <div class="logo">
        <h1><a href="index.blade.php">Game Over Addiction <small><img src="{{asset('images/logogoa.jpg')}}" width="75" height="75" alt="" class="gal" /></a></small></a></h1>
      </div>
@endsection


@section('content')
    <div class="article"> <a href="#" class="com"><span>11</span></a>
        <h2><span>Bienvenido a la página </span> de GOA</h2>
        <p class="infopost">Posteado <span class="date">el 15 feb 2019</span> por <a href="https://www.facebook.com/klagoslavin">PerroBomba</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <div class="clr"></div>
        <div class="img"><img src="{{ asset('images/perrobomba.jpg')}}" width="630" height="250" alt="" class="fl" /></div>
        <div class="post_content">
            <p>Esperamos que tu experiencia sea la mejor de todas!. Esta página ha sido creada únicamente por Perro Bomba, gracias al feedback de ciertos usuarios y administración en el proceso.</p>
            <p><strong>Crea una cuenta en la parte superior derecha de la página, para que puedas acceder a torneos, salas personalizadas y futuros premios</strong></p>
            <p class="spec"><a href="#" class="rm">Leer más &raquo;</a></p>
        </div>
        <div class="clr"></div>
    </div>
    <!--  <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p> PAGINA 1 DE 2-->
    </div>
    @include('sidebar')
    
    @section('footer')
    @include('footer')
    @endsection
    <div class="clr"></div>
@endsection