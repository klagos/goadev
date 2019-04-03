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
                        <th>Cupos</th>
                        <th>Fecha Inicio</th>
                        <th>Hora</th>
                        <th>Inscripción</th>
                        <?php if(Auth::user()->email != "adm.gameoveraddiction@gmail.com"): ?>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $torneos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $torneo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-xs-left"><?php echo e($torneo->name); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->capacity); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->capacity - $torneo->actual); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->fecha); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->hora); ?></td>
                        <td class="text-xs-left">
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
                                    echo Form::submit('Desinscribirse',['class' => 'btn btn-large btn-danger']);
                                } 
                            } else {
                                echo Form::hidden('user_id', Auth::user()->id);
                                echo Form::hidden('torneo_id', $torneo->torneo_id);
                                echo Form::hidden('inscrito', 0);
                                echo Form::submit('Inscribirse',['class' => 'btn btn-large btn-primary']);
                            }
                            echo Form::close();
                        ?>
                        </td>
                        <?php if(Auth::user()->email != "adm.gameoveraddiction@gmail.com"): ?>
                        <td><a href="/editarTorneo/<?php echo e($torneo->torneo_id); ?>">Editar</a></td>
                        <td><a href="/inscritos/<?php echo e($torneo->torneo_id); ?>">Ver</a></td>
                        <td><a href="/change/<?php echo e($torneo->torneo_id); ?>">Off</a></td>
                        <td><a href="/borrarTorneo/<?php echo e($torneo->torneo_id); ?>">Kill</a></td>
                        <td><a href="/crearCorreo/<?php echo e($torneo->torneo_id); ?>">Correo</a></td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php if(Auth::user()->email != "adm.gameoveraddiction@gmail.com" OR Auth::user()->email != "javier.moreno.icmin@gmail.com"): ?>
        <h2 class="title-1 m-b-25">Torneos Inactivos</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Cupos</th>
                        <th>Fecha Inicio</th>
                        <th>Hora</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $torneosIn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $torneo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-xs-left"><?php echo e($torneo->name); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->capacity); ?></td>
                        <?php if($torneo->capacity > $torneo->actual): ?>
                        <td class="text-xs-left"><?php echo e($torneo->capacity - $torneo->actual); ?></td>
                        <?php else: ?>
                        <td></td>
                        <?php endif; ?>
                        <td class="text-xs-left"><?php echo e($torneo->fecha); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->hora); ?></td>
                        <td><a href="/editarTorneo/<?php echo e($torneo->torneo_id); ?>">Editar</a></td>
                        <td><a href="/inscritos/<?php echo e($torneo->torneo_id); ?>">Ver</a></td>
                        <td><a href="/change/<?php echo e($torneo->torneo_id); ?>">On</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>