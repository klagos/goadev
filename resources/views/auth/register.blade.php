<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-59">
                        Registro
                    </span>
                        <div class="wrap-input100 validate-input" data-validate="El campo nombre es requerido">
                            <label for="name"><span class="label-input100">Nombre Completo</span></label>
                                <input id="name" class="input100" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Perico Los Palotes" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Email es requerido">
                            <label for="email"><span class="label-input100">Email</span></label>

                                <input id="email" class="input100" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ejemplo@gmail.com"required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
                            <label for="password"><span class="label-input100">Contraseña</span></label>
                                <input id="password" type="password" class="input100" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="*************"  required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Repite tu contraseña">
                            <label for="password-confirm"><span class="label-input100">Repite Contraseña</span></label>
                                <input id="password-confirm" class="input100" type="password" class="form-control" name="password_confirmation" placeholder="*************" required>
                        </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>