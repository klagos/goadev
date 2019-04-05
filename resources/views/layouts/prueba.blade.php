@extends('template')

@section('nav')
	@extends('navbar')
@endsection

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a nuestra página!</div>
                <div class="intro-heading">Game Over Addiction</div>
                <a href="/home" class="page-scroll btn btn-xl">Login</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">Siempre brindándote lo mejor.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Venta</h4>
                    <p class="text-muted">Pronto!. Venta de juegos digitales y más </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Inscripción de torneos</h4>
                    <p class="text-muted">Puedes crearte una cuenta para poder
                    inscribirte a los torneos de Game Over Addiction, saber en cuantos
                    has participado y cuántos están activos.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user-secret fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Respuesta rápida</h4>
                    <p class="text-muted">Si encontraste algún error, tienes algún problema
                    o alguna duda, te responderemos lo más rapido posible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">El equipo de GOA</h2>
                    <h3 class="section-subheading text-muted">Cada uno con su toque amoroso.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/perrobomba.jpg" class="img-responsive img-circle" alt="">
                        <h4>Elprah (Perro Bomba)</h4>
                        <p class="text-muted">Administrador</p>
                        <p class="text-muted">Creador de www.gameoveraddiction.com</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/perrobomba.jpg" class="img-responsive img-circle" alt="">
                        <h4>Thundara</h4>
                        <p class="text-muted">Fundador de la página GOA</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>RAZAKING</h4>
                        <p class="text-muted">Co-Fundador de la página GOA</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/tabac.jpg" class="img-responsive img-circle" alt="">
                        <h4>Andres Tabac</h4>
                        <p class="text-muted">Colaborador</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/javier.jpg" class="img-responsive img-circle" alt="">
                        <h4>Javier Moreno</h4>
                        <p class="text-muted">Colaborador</p>
                        <p class="text-muted">Creador de www.gameoveraddiction.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Cualquier error o mejora que encuentres, por favor envíanosla al correo adm.gameoveraddiction@gmail.com .</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/recargasgamers.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
@endsection

@section('footer')
    @include('footer')
@endsection