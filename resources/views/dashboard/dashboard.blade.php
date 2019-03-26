@extends('dashboard.dashtemplate')

@section('content2')
    @parent
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
@endsection