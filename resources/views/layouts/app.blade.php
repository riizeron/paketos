<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="riizeron">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/catalog_item.css">
    <link rel="stylesheet" href="/css/stars.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    
    <link rel="stylesheet" href="/resources/css/main.css">
    <link rel="stylesheet" href="/css/catalog_item.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto justify-content-between" style="margin-left: 28%">
                        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
                        <li><a href="/catalog" class="nav-link px-2 link-dark">Catalog</a></li>
                        <li><a href="/pricing" class="nav-link px-2 link-dark">Pricing</a></li>
                        <li><a href="/FAQs" class="nav-link px-2 link-dark">FAQs</a></li>
                        <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
                        <li><a href="/review" class="nav-link px-2 link-dark">Reviews</a></li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/users/{{ Auth::user()->id }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @if(Auth::user()->admin)
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/user/{{ Auth::user()->id }}">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="/admin/userlist">
                                            {{ __('User list') }}
                                        </a>
                                        <a class="dropdown-item" href="/admin/orderlist">
                                            {{ __('Order list') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @else
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/user/{{ Auth::user()->id }}">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="/user/{{ Auth::user()->id }}/cart">
                                            {{ __('Cart') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                @endif
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
                    <small class="d-block mb-3 text-muted">© 2017–2021</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary" href="#">Cool stuff</a></li>
                            <li><a class="link-secondary" href="#">Random feature</a></li>
                            <li><a class="link-secondary" href="#">Team feature</a></li>
                            <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                            <li><a class="link-secondary" href="#">Another one</a></li>
                            <li><a class="link-secondary" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Resource name</a></li>
                        <li><a class="link-secondary" href="#">Resource</a></li>
                        <li><a class="link-secondary" href="#">Another resource</a></li>
                        <li><a class="link-secondary" href="#">Final resource</a></li>
                    </ul>
                    </div>
                    <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Business</a></li>
                        <li><a class="link-secondary" href="#">Education</a></li>
                        <li><a class="link-secondary" href="#">Government</a></li>
                        <li><a class="link-secondary" href="#">Gaming</a></li>
                    </ul>
                    </div>
                    <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Locations</a></li>
                        <li><a class="link-secondary" href="#">Privacy</a></li>
                        <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
