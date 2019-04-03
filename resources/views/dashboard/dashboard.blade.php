@extends('dashboard.dashtemplate')

@section('title')
    @parent
    <title>Game Over Addiction - Dashboard</title>
@endsection

@section('content2')
    @parent
    <h1>Bienvenido {{ auth()->user()->username }}</h1>
    <h4>Este es tu dashboard, a la izquierda puedes ver la seccion de torneos en donde aparecerán los torneos en curso, en tu dashboard aparecen la estadística de los torneos activos en los que estás inscritos, la cantidad de torneos activos y una tabla con tu historial de torneos.</h4>
    <div class="row m-t-25">
        <div class="col-sm-8 col-lg-4">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>
                                <?php
                                    echo DB::table('torneo_user')->where('user_id',Auth::user()->id)->count();
                            
                                ?>
                            </h2>
                            <span>Torneos Inscritos</span>
                        </div>
                    </div>
                    <div style="text-align: center">
                        <img style="max-height:120px" src="images/chicken.png" alt="">
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-8 col-lg-4">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2><?php
                                    echo DB::table('torneos')->where('isActive',1)->count();
                            
                                ?></h2>
                            <span>Torneos Activos</span>
                        </div>
                    </div>
                    <div style="text-align: center">
                        <img style="max-height:120px" src="images/kirby.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($torneos as $torneo)
                    <tr>
                        <td class="text-xs-left">{{ $torneo->name }}</td>
                        <td class="text-xs-left">{{ $torneo->fecha }}</td>
                        <td class="text-xs-left">{{ $torneo->hora }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection