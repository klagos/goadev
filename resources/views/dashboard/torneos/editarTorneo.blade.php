@extends('dashboard.dashtemplate')
@section('title')
    @parent
    <title>Game Over Addiction - Editar Torneo {{ $torneo->name }}</title>
@endsection

@section('content2')
    @parent
    <div class="col-lg-12">
    <h2 class="title-1 m-b-25">Editar Torneo</h2>
        <?php
            echo Form::open(array('url' => '/editarTorneo'));
            
            echo Form::label('Nombre', 'Nombre');
            echo Form::text('name');
            echo '<br/>';
            echo Form::label('Capacidad', 'Capacidad');
            echo Form::number('capacity');
            echo '<br/>';
            echo Form::hidden('torneo_id', $torneo->torneo_id);   
            echo Form::submit('Guardar');
            
            echo Form::close();
        ?>
    </div>  
@endsection  