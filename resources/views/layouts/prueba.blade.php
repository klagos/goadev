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


@section('content')
    <div class="article"> <a href="#" class="com"><span>11</span></a>
        <h2><span>Bienvenido a la página </span> de GOA</h2>
        <p class="infopost">Posteado <span class="date">el 15 feb 2019</span> por <a href="https://www.facebook.com/klagoslavin">PerroBomba</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <div class="clr"></div>
        <div class="img"><img src="{{ asset('images/perrobomba.jpg')}}" width="630" height="250" alt="" class="fl" /></div>
        <div class="post_content">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
            <p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
        </div>
        <div class="clr"></div>
    </div>
    <!--  <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p> PAGINA 1 DE 2-->
    </div>
    <div class="sidebar">
        <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">TemplateInfo</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">Web Templates</a></li>
            </ul>
        </div>
        <div class="gadget">
            <h2 class="star"><span>Afiliados</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
                <li><a href="#">Tienda PUBG</a><br />
                    La mejor tienda de pubg mobile con las 3B!</li>
            </ul>
        </div>
    </div>
    <div class="clr"></div>
@endsection