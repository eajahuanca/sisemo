<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SISEMO</title>
    <link rel="stylesheet prefetch" href="{{ asset('plugins/login/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/login/css/style.css') }}">
</head>
<body>
<div class="cont">
    <div class="demo">
        <div class="login">
            <div class="login__check">
                <img src="{{ asset('plugins/login/img/logo.jpg') }}" width="273px" height="80px" />
                <p class="titulo">SISTEMA DE SEGUIMIENTO Y MONITOREO DE PROYECTOS</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="text" class="login__input name" placeholder="Cuenta de Usuario" name="us_cuenta" value="" />
                    </div>
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" class="login__input pass" placeholder="Contrasena" name="password" />
                    </div>
                    <button type="button" class="login__submit"><b>Iniciar Sesión</b></button>
                    <p class="login__signup">Olvido su contraseña? &nbsp;<a href="{{ route('password.request') }}">Recuperar</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('plugins/login/js/jquery.min.js') }}"></script>



<script src="js/index.js"></script>




</body>

</html>