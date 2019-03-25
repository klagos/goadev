    <?php $__env->startSection('title'); ?>
        ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
        <title>Game Over Addiction - Torneos</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content2'); ?>
        ##parent-placeholder-6dc99d4757bcb35eaaf4cd3cb7907189fab8d254##
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
                        <?php $__currentLoopData = $torneos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $torneo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($torneo->name); ?></td>
                            <td><?php echo e($torneo->capacity); ?></td>
                            <td><?php echo e($torneo->capacity - $torneo->actual); ?></td>
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
                            <td><a href="/editarTorneo/<?php echo e($torneo->torneo_id); ?>">Editar</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>