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
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashtemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>