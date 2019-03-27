@extends('dashboard.dashtemplate')

@section('title')
    @parent
    <title>Game Over Addiction - Inscritos'</title>
@endsection

@section('content2')
    @parent
    <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Inscritos {{ DB::table('torneos')->where('torneo_id',$torneo_id)->first()->name }}</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Genero</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="text-xs-left">{{$user->name}}</td>
                            <td class="text-xs-left">{{$user->email}}</td>
                            <td class="text-xs-left">Algo</td>
                            <td>
                                <?php
                                echo Form::open(array('url' => '/drop'));

                                echo Form::hidden('user_id', $user->id);
                                echo Form::hidden('torneo_id', $torneo_id);
                                echo Form::submit('Eliminar',['class' => 'btn btn-large btn-danger']);   
                                echo Form::close();
                                ?>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection