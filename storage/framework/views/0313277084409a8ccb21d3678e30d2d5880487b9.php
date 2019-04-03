<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Game Over Addiction - Correo Masivo</title> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>
    ##parent-placeholder-6dc99d4757bcb35eaaf4cd3cb7907189fab8d254##
    <?php 
        echo Form::open(array('url' => '/enviarCorreo','class' => 'form-horizontal'));
        echo '<br/>';
        echo Form::textarea('cuerpo', null, ['class' => 'form-control']);
        echo '<br/>';
        echo Form::hidden('torneo_id',$torneo_id);
        echo Form::submit('Crear',['class' => 'btn btn-large btn-primary']);
        echo Form::close();
    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>