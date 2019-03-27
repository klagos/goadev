<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Game Over Addiction - Dashboard</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>
    ##parent-placeholder-6dc99d4757bcb35eaaf4cd3cb7907189fab8d254##
    <div class="row m-t-25">
        <div class="col-sm-8 col-lg-4">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>
                                <?php
                                    echo DB::table('torneo_user')->where('user_id',Auth::user()->id)->count();
                            
                                ?>
                            </h2>
                            <span>Torneos Inscritos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8 col-lg-4">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2><?php
                                    echo DB::table('torneos')->where('isActive',1)->count();
                            
                                ?></h2>
                            <span>Torneos Activos</span>
                        </div>
                    </div>
                    <div >
                        <img style="max-height:60%; max-width:60%" src="images/casco.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha Inicio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $torneos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $torneo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-xs-left"><?php echo e($torneo->name); ?></td>
                        <td class="text-xs-left"><?php echo e($torneo->fecha); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>