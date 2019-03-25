@extends('dashboard.dashtemplate')
@section('title')
    @parent
    <title>Game Over Addiction - Torneos</title>
@endsection

@section('sidebar')
    @show

@section('content')
    @show
            
@section('content2')
    @parent            
    <div class="col-lg-9">
        <h2 class="title-1 m-b-25">Crear Torneo</h2>
        <?php
            echo Form::open(array('url' => 'crearTorneo'));
            
            echo Form::label('Nombre', 'Nombre');
            echo Form::text('Nombre');
            echo '<br/>';
            echo Form::label('Capacidad', 'Capacidad');
            echo Form::number('Capacidad');
            echo '<br/>';
            echo Form::submit('Crear');
            
            echo Form::close();
        ?>
    </div>  
@endsection