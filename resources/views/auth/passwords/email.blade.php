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
                <p class="titulo">RECUPERAR CONTRASEÑA</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                <div class="login__form">
                    {{ csrf_field() }}
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="login__row">
                        <svg class="login__icon email svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="email" class="login__input email" placeholder="example@example.com" name="email" required="true"/>
                    </div>
                    <button type="button" class="login__submit"><b>Enviar enlace</b></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('plugins/login/js/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/login/js/index.js') }}"></script>
</body>
</html>