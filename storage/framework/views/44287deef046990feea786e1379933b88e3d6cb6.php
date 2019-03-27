<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Game Over Addiction - Inscritos'</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>
    ##parent-placeholder-6dc99d4757bcb35eaaf4cd3cb7907189fab8d254##
    <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Inscritos <?php echo e(DB::table('torneos')->where('torneo_id',$torneo_id)->first()->name); ?></h2>
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
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-xs-left"><?php echo e($user->name); ?></td>
                            <td class="text-xs-left"><?php echo e($user->email); ?></td>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>