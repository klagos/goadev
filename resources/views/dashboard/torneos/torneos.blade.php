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
                            <th>Cupos disponibles</th>
                            <th>Inscripción</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($torneos as $torneo)
                        <tr>
                            <td>{{$torneo->name}}</td>
                            <td>{{$torneo->capacity}}</td>
                            <td>{{$torneo->capacity - $torneo->actual}}</td>
                            <td>
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
                                        echo Form::submit('Desinscribirse');
                                    } 
                                } else {
                                    echo Form::hidden('user_id', Auth::user()->id);
                                    echo Form::hidden('torneo_id', $torneo->torneo_id);
                                    echo Form::hidden('inscrito', 0);
                                    echo Form::submit('Inscribirse');
                                }
                                echo Form::close();
                            ?>
                            </td>
                            <td><a href="/editarTorneo/{{ $torneo->torneo_id }}">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection