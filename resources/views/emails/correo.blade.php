@extends('dashboard.dashtemplate')

@section('title')
    @parent
    <title>Game Over Addiction - Correo Masivo</title> 
@endsection

@section('content2')
    @parent
    <?php 
        echo Form::open(array('url' => '/enviarCorreo','class' => 'form-horizontal'));
        echo '<br/>';
        echo Form::textarea('cuerpo', null, ['class' => 'form-control']);
        echo '<br/>';
        echo Form::hidden('torneo_id',$torneo_id);
        echo Form::submit('Crear',['class' => 'btn btn-large btn-primary']);
        echo Form::close();
    ?>
@endsection