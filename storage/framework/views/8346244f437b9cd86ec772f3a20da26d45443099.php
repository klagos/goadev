<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <?php $__env->startSection('title'); ?>
    
    <?php echo $__env->yieldSection(); ?> 
    <link rel="icon" type="image/png" href="images/icons/fav3.ico"/>
    <!-- Fontfaces CSS-->
    <link href="<?php echo e(asset('css/font-face.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">   
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/dashboard">
                            <img style="max-height:100px" src="<?php echo e(asset('images/icon/logoGOA.png')); ?>" alt="Game Over Addiction" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="/dashboard">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
                        <?php if(Auth::user()->email != "adm.gameoveraddiction@gmail.com"): ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Torneos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/torneos">Lista</a>
                                </li>
                                <li>
                                    <a href="/crearTorneo">Crear</a>
                                </li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="/torneos">
                                <i class="fas fa-chart-bar"></i>Torneos</a>
                        </li>
                        <?php endif; ?>
                    </ul>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <?php $__env->startSection('sidebar'); ?>
        <?php echo $__env->yieldSection(); ?>
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/">
                    <img style="height:60px" src="<?php echo e(asset('images/goa.png')); ?>" alt="Game Over Addiction" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/dashboard">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
                        <?php if(Auth::user()->email == "adm.gameoveraddiction@gmail.com" OR Auth::user()->email == "javier.moreno.icmin@gmail.com"): ?>
                            <li class="has-sub">                            
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>Torneos</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="/torneos">Lista</a>
                                    </li>
                                    <li>
                                        <a href="/crearTorneo">Crear</a>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                        <li>
                            <a href="/torneos">
                                <i class="fas fa-chart-bar"></i>Torneos</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div style="position:absolute; bottom: 0">
                <img src="<?php echo e(asset('images/pikachu.gif')); ?>" alt="">
                </div>
                
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="position:relative;float:right;">
                            <div class="header-button">                                    
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo e(asset('images/icon/perfil.png')); ?>" alt="Perfil" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo e(Auth::user()->name); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo e(asset('images/icon/perfil.png')); ?>" alt="Perfil" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo e(Auth::user()->name); ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo e(Auth::user()->email); ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/usuarios/detalles/<?php echo e(Auth::user()->id); ?>">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <?php $__env->startSection('content'); ?>
            <?php echo $__env->yieldSection(); ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php $__env->startSection('content2'); ?>
                        <?php echo $__env->yieldSection(); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo e(asset('vendor/jquery-3.2.1.min.js')); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo e(asset('vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo e(asset('vendor/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/animsition/animsition.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>">    </script>
    <script src="<?php echo e(asset('vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/counter-up/jquery.counterup.min.js')); ?>">    </script>
    <script src="<?php echo e(asset('vendor/circle-progress/circle-progress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html>
<!-- end document-->
