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
            echo Form::open(array('url' => 'crearTorneo','class' => 'form-horizontal'));
            
            echo Form::label('Nombre', 'Nombre');
            echo Form::text('Nombre', null, ['class' => 'form-control']);
            echo '<br/>';
            echo Form::label('Capacidad', 'Capacidad');
            echo Form::number('Capacidad', null, ['class' => 'form-control']);
            echo '<br/>';
            echo Form::label('Fecha', 'Fecha Inicio');
            echo Form::date('fecha', null, ['class' => 'form-control']);
            echo '<br/>';
            echo Form::label('Hora', 'Hora');
            echo Form::time('hora', null, ['class' => 'form-control']);
            echo '<br/>';
            echo Form::submit('Crear',['class' => 'btn btn-large btn-primary']);
            
            echo Form::close();
        ?>
    </div>  
@endsection