<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Game Over Addiction - Torneos</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
            
<?php $__env->startSection('content2'); ?>
    ##parent-placeholder-6dc99d4757bcb35eaaf4cd3cb7907189fab8d254##            
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
            echo Form::text('hora', null, ['class' => 'form-control']);
            echo '<br/>';
            echo Form::submit('Crear',['class' => 'btn btn-large btn-primary']);
            
            echo Form::close();
        ?>
    </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>