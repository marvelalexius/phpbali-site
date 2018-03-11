<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="ecommerce-page contact-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" data-placement="bottom" >
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " data-color="blue" data-nav-image="/img/blurred-image-1.jpg">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">CODE OF CONDUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">MEETUPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link modal-toggle" data-tab="tab_login" data-toggle="modal" data-target="#modalLogin" href="#link_login">SIGN IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link modal-toggle" data-tab="tab_register" data-toggle="modal" data-target="#modalLogin" href="#link_register">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
