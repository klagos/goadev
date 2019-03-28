@extends('dashboard.dashtemplate')
    @section('title')
        @parent
        <title>Game Over Addiction - Torneos</title>
    @endsection

@section('content2')
    @parent
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Torneos</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Cupos</th>
                        <th>Fecha Inicio</th>
                        <th>Hora</th>
                        <th>Inscripción</th>
                        @if (Auth::user()->email != "adm.gameoveraddiction@gmail.com")
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($torneos as $torneo)
                    <tr>
                        <td class="text-xs-left">{{$torneo->name}}</td>
                        <td class="text-xs-left">{{$torneo->capacity}}</td>
                        <td class="text-xs-left">{{$torneo->capacity - $torneo->actual}}</td>
                        <td class="text-xs-left">{{ $torneo->fecha }}</td>
                        <td class="text-xs-left">{{ $torneo->hora }}</td>
                        <td class="text-xs-left">
                        <?php
                            echo Form::open(array('url' => 'torneos'));
                            if (DB::table('torneo_user')->where('user_id','=',Auth::user()->id)->where('torneo_id','=',
                            $torneo->torneo_id)->first())
                            {   
                                if($torneo->actual < $torneo->capacity)
                                {
                                    echo Form::hidden('user_id', Auth::user()->id);
                                    echo Form::hidden('torneo_id', $torneo->torneo_id);
                                    echo Form::hidden('inscrito', 1);
                                    echo Form::submit('Desinscribirse',['class' => 'btn btn-large btn-danger']);
                                } 
                            } else {
                                echo Form::hidden('user_id', Auth::user()->id);
                                echo Form::hidden('torneo_id', $torneo->torneo_id);
                                echo Form::hidden('inscrito', 0);
                                echo Form::submit('Inscribirse',['class' => 'btn btn-large btn-primary']);
                            }
                            echo Form::close();
                        ?>
                        </td>
                        @if (Auth::user()->email != "adm.gameoveraddiction@gmail.com")
                        <td><a href="/editarTorneo/{{ $torneo->torneo_id }}">Editar</a></td>
                        <td><a href="/inscritos/{{ $torneo->torneo_id }}">Ver</a></td>
                        <td><a href="/change/{{ $torneo->torneo_id }}">Off</a></td>
                        <td><a href="/borrarTorneo/{{ $torneo->torneo_id }}">Kill</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (Auth::user()->email != "adm.gameoveraddiction@gmail.com" OR Auth::user()->email != "javier.moreno.icmin@gmail.com")
        <h2 class="title-1 m-b-25">Torneos Inactivos</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Cupos</th>
                        <th>Fecha Inicio</th>
                        <th>Hora</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($torneosIn as $torneo)
                    <tr>
                        <td class="text-xs-left">{{$torneo->name}}</td>
                        <td class="text-xs-left">{{$torneo->capacity}}</td>
                        @if($torneo->capacity > $torneo->actual)
                        <td class="text-xs-left">{{$torneo->capacity - $torneo->actual}}</td>
                        @else
                        <td></td>
                        @endif
                        <td class="text-xs-left">{{ $torneo->fecha }}</td>
                        <td class="text-xs-left">{{ $torneo->hora }}</td>
                        <td><a href="/editarTorneo/{{ $torneo->torneo_id }}">Editar</a></td>
                        <td><a href="/inscritos/{{ $torneo->torneo_id }}">Ver</a></td>
                        <td><a href="/change/{{ $torneo->torneo_id }}">On</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
@endsection