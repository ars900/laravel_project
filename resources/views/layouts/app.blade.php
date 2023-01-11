<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Add a gray background color and some padding to the footer */
        .bgmain{
            height: 100%;
            /* max-height: 600px; */
            width: 100%;
            background-color: hsla(200,40%,30%,.4);
            background-image:
            url('https://preview.redd.it/hxt39sitaxp81.jpg?width=640&crop=smart&auto=webp&s=5ab598805acabbe42a531da21ddb6f41383036f7'),
            url('https://preview.redd.it/xxdlsokzejr81.jpg?width=640&crop=smart&auto=webp&s=9f5da0a619ea7cafc446c6970544ea186bad6903');
            background-repeat: repeat-x;
            background-position:
                0 20%,
                0 100%,
                0 50%,
                0 100%,
                0 0;
            background-size: cover;
            animation: 50s para infinite linear;
        }

        @keyframes para {
            100% {
                background-position:
                    -5000px 20%,
                    -800px 95%,
                    500px 50%,
                    1000px 100%,
                    400px 0;
            }
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            min-height: 200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
        h3, h4 {
            margin: 10px 0 30px 0;
            letter-spacing: 10px;
            font-size: 20px;
            color: #111;
        }
        .container {
            padding: 80px 120px;
        }
        .person {
            border: 10px solid transparent;
            margin-bottom: 25px;
            width: 80%;
            height: 80%;
            opacity: 0.7;
        }
        .person:hover {
            border-color: #f1f1f1;
        }
        .carousel-inner img {
            -webkit-filter: grayscale(90%);
            filter: grayscale(90%); /* make all photos black and white */
            width: 100%; /* Set width to 100% */
            margin: auto;
        }
        .carousel-caption h3 {
            color: #fff !important;
        }
        @media (max-width: 600px) {
            .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
            }
        }

        .bg-1 h3 {color: #fff;}
        .bg-1 p {font-style: italic;}
        .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }
        .add_user{
            padding: 10px 20px;
            background-color: #333;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }
        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }
        .btn:hover, .btn:focus {
            border: 1px solid #333;
            background-color: #fff;
            color: #000;
        }
        .modal-header, h4, .close {
            background-color: #333;
            color: #fff !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-header, .modal-body {
            padding: 40px 50px;
        }
        .nav-tabs li a {
            color: #777;
        }
        #googleMap {
            width: 100%;
            height: 400px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }
        .navbar {
            font-family: Montserrat, sans-serif;
            margin-bottom: 0;
            background-color: #2d2d30;
            border: 0;
            font-size: 11px !important;
            letter-spacing: 4px;
            opacity: 0.9;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #d5d5d5 !important;
        }
        .navbar-nav li a:hover {
            color: #fff !important;
        }
        .navbar-nav li.active a {
            color: #fff !important;
            background-color: #29292c !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }
        .open .dropdown-toggle {
            color: #fff;
            background-color: #555 !important;
        }
        .dropdown-menu li a {
            color: #000 !important;
        }
        .dropdown-menu li a:hover {
            background-color: red !important;
        }
        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 32px;
        }
        footer a {
            color: #f5f5f5;
        }
        footer a:hover {
            color: #777;
            text-decoration: none;
        }
        .form-control {
            border-radius: 0;
        }
        textarea {
            resize: none;
        }

    </style>
</head>
<body>
@stack('script')
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style = "background-size: cover; background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Yerevan_Wikivoyage_banner.jpg/2560px-Yerevan_Wikivoyage_banner.jpg')">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>Yere1</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')

    </main>
</div>
</body>
</html>
