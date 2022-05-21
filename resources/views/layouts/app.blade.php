<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    {{-- <script src = "{{ asset('js/app.js') }}" defer > </script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/c1d51a72c4.js"></script>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css') }}">
</head>

<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div id="app">
        <!--nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top ">
            <div class="container">
                <img id="navlogo" href="{{ url('/') }}" src="/image/logo@2x.png" alt="logo">
                <button style="background: #60a3bc" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span id="bar" class="fas fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="visibility: visible;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id="rech-btn" class="nav-link" data-toggle="modal" data-bs-target="#rech" role="tab"
                                data-target="#rech"><i style="color: black; margin-top: 12px; font-size: 30px;"
                                    class="bi bi-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-top: 10px;" class="nav-link active" href="/">Home</a>
                        </li>
                        {{-- @if (Auth::guest() && Auth::user()) --}}
                        @php

                            $categories = App\Models\Category::all();
                        @endphp
                        <li class="nav-item">
                            <div class="dropdown me-2">
                                <a style="margin-top: 8px;" class="nav-link dropdown-toggle" href="#"
                                    id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-offset="10,20">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    @foreach ($categories as $category)
                                        <li><a class="dropdown-item" id="medic-btn"
                                                href="/categories/{{ $category->id }}">{{ $category->title }}</a>
                                        </li>
                                    @endforeach


                                    <!-- <li><a class="dropdown-item" id="food-btn"  href="/food">Food</a></li>
                    <li><a class="dropdown-item" id="equip-btn" href="/equipements">Equipements</a></li> -->
                                </ul>
                            </div>
                        </li>
                        {{-- @endif --}}
                        <li class="nav-item">
                            <a style="margin-top: 10px;" class="nav-link" href="/#services">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-top: 10px;" class="nav-link" href="/#about">About Us</a>
                        </li>
                        {{-- @if (Auth::guest() && Auth::user()) --}}
                        <li class="nav-item">
                            <a style="margin-top: 10px;" class="nav-link" id="contact-btn" data-toggle="modal"
                                data-target="#contact" data-bs-target="#contact" role="tab" href="#contact">Contact
                                Us</a>
                        </li>
                        {{-- @endif --}}
                        @if (!Auth::guest() && Auth::user()->type == 1)
                            <li class="nav-item">
                                <div class="dropdown me-2">
                                    <a style="" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><i
                                            style="font-size: 30px !important;" class="bi bi-plus-circle"></i></a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">

                                        {{-- <a style="margin-top: 10px;" class="nav-link"  href="/products/create"></a> --}}
                                        <li><a class="dropdown-item" id="add-btn" data-toggle="modal"
                                                data-target="#add" data-bs-target="#add" role="tab" href="#add">Add
                                                Product</a></li>

                                </div>
                            </li>
                        @endif
                        {{-- @if (Auth::guard('admin')->check())
                         <li class="nav-item">
                            <div class="dropdown me-2">
                                <a style="" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"><i
                                        style="font-size: 30px !important;" class="bi bi-plus-circle"></i></a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <li><a class="dropdown-item" id="add_category-btn" data-toggle="modal"
                                            data-target="#add_category" data-bs-target="#add_category" role="tab" href="#add">Add
                                            category</a></li>

                            </div>
                         </li>
                        @endif --}}
                 @if (Auth::guard('web')->check())
                <li class="nav-item">
                    <a style="font-size: 30px !important;" href="/cart" class="nav-link bi bi-cart2"></a>
                </li>
                @endif
                <li class="nav-item">
                    <div class="dropdown me-2">
                        <a style="" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">  <img  src="{{ url(Auth::user()->image ??'/uploads/profile/user.png') }}" style="width:40px; height:40px; font-size: 18px;  border-radius: 50%;"> </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            @guest
                                {{-- <small>GUEST</small> --}}

                                <li><a class="dropdown-item" id="login-btn" data-toggle="modal" data-target="#login"
                                        data-bs-target="#login" role="tab" href="#login">LOG IN</a></li>

                                <li><a class="dropdown-item" id="signup-btn" data-toggle="modal" data-target="#signup"
                                        data-bs-target="#signup" role="tab" href="#signup">SIGN UP</a></li>
                                {{-- @else
                                       @if (auth()->guard('admin')->check())
                                             <li>
                                                <a class="dropdown-item" href="{{ route("admin.index") }}">dashbord</a>
                                                <a class="dropdown-item" href="{{ route('admin.logout') }}">Log Out</a>
                                            </li>
                                        @endif --}}
                            @endguest
                                {{-- @if (Auth::guard('admin')->check())
                                     <small>{{ auth()->guard("admin")->user()->name }} </small>
                                    {{-- <li><a class="dropdown-item" href="" >{{ auth()->guard("admin")->user()->name }} </a></li> --}}
                                        {{-- <li><a class="dropdown-item" href="{{ route('admin.index') }}">Dashbord</a></li>
                                    <li><a class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"
                                            href="{{ route('admin.logout') }}">ADMIN Log Out </a></li>
                                @endif --}}
                                @if (Auth::guard('web')->check())
                                    {{-- <small>{{ Auth::user()->name }}</small> --}}
                                    <li><a class="dropdown-item" href="/Profile/">{{ Auth::user()->name }}</a></li>
                                    <li><a class="dropdown-item" href="/myOrder">My Order</a></li>
                                    @if (auth()->user()->type == 1)
                                       <li><a class="dropdown-item" href="/myProduct">My Product</a></li>
                                    @endif
                                    <li><a class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('user-logout-form').submit();"
                                            href="{{ route('logout') }}">Log Out</a></li>
                                @endif
                        </ul>
                        {{-- <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> --}}
                        <form id="user-logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                </ul>
            </div>
    </div>
    </nav>
    @include('partials.search')
    {{-- <!--recherche modal-->
      <div class="modal fade" id="rech">
        <div class="modal-dialog" style="margin-top: 100px; width: 400px;">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body" style="height: 90px;">
                  <div class="search-box" style="margin-left: 20px; margin-right: 20px;">
                    <input class="search-txt" type="text" name="" placeholder="Type to search">
                    <a class="search-btn" href="#">
                     <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
            </div>
        </div>
      </div> --}}




    <!--add product-->
    <div class="modal fade " id="add">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
            <div class="modal-content user_card">

                <div class="modal-body">
                    <div class="d-flex justify-content-center h-100">
                        <div class="">
                            <div class="d-flex justify-content-center" style="margin-bottom: 20px">
                                <div class="brand_logo_container">
                                    <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                                </div>
                            </div>
                            <div class="container h-100">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="">
                                        <div class="d-flex justify-content-center">
                                            <div class="brand_logo_container">
                                                <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center form_container">
                                            <form style="width: 200px;" method="POST" action="/products"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-2 ">
                                                    <input id="title" type="text"
                                                        class="form-control input_pass input_user @error('title') is-invalid @enderror"
                                                        placeholder="Tilte" name="title" value="{{ old('title') }}"
                                                        required autocomplete="title" autofocus>
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input id="desc" type="text" class="form-control input_pass"
                                                        placeholder="Description" name="description"
                                                        value="{{ old('description') }}" required
                                                        autocomplete="description">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input id="price" type="number" placeholder="price"
                                                        class="form-control" name="price" required
                                                        autocomplete="price">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input id="qty" type="number" placeholder="qty"
                                                        class="form-control" name="qty" required
                                                        autocomplete="number">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input id="image" type="file" class="form-control" name="image"
                                                        required>
                                                </div>

                                                <div class="input-group mb-2">
                                                    <select style="height:35px; width:200px" required class="form-select" name="category_id"
                                                        aria-label="Default select example">
                                                        <option disabled selected>Select the category</option>
                                                        @php
                                                            $categories = App\Models\Category::all();
                                                        @endphp
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->title }}</option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                                <div class="d-flex justify-content-center mt-3 login_container">
                                                    <button type="submit" name="button"
                                                        class="btn login_btn">{{ __('Add Product') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    {{-- alerts --}}
    <div style="margin-top: 80px" class="row">
        <div class="div.col-md-8 mx-auto my-4">
            @include('layouts.alerts')
        </div>

    </div>

    {{-- content --}}
    <main class="py-4">
        @yield('content')
    </main>

    <footer id="footer" class=" text-center mt-5 py-2">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-4 col-md-6 col-12">
                <img style="margin-bottom: 20px; font-size: 100px;" id="navlogo" src="/image/footer@2x.png" alt="logo">
                <p>Hello and welcome to M-Rare Store, the place to find the best medicines, foods and all the
                    parapharmacy of rare diseases.</p>

            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h4 class="pb-2">
                    <p>Navigation</p>
                </h4>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#homme" style=" text-decoration: none; font-size: 12px;">
                            <p>Homme</p>
                        </a>
                    </li>
                    <li>
                        <div class="btn-group">
                            <a class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                                aria-expanded="false" style=" text-decoration: none; font-size: 12px;">
                                <p>Shop</p>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" id="medic-btn"
                                            href="/categories/{{ $category->id }}">{{ $category->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li><a href="#services" style=" text-decoration: none; font-size: 12px;">
                            <p>Our Services</p>
                        </a>
                    </li>
                    <li>
                        <a href="#about" style=" text-decoration: none; font-size: 12px;"><p>About Us</p></a>
                    </li>
                    <li>
                        <a style=" text-decoration: none; font-size: 12px;" id="contact-btn" data-toggle="modal" data-target="#contact" data-bs-target="#contact" role="tab" href="#contact"><p>Contact Us</p></a>
                    </li>
                </ul>

            </div>


            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h4 class="pb-2">
                    <p>Contact</p>
                </h4>
                <div>
                    <h6 class="text-uppercase">Adress</h6>
                    <p>Blida</p>
                </div>
                <div>
                    <h6 class="text-uppercase">phone</h6>
                    <p>+213 658 26 67 59</p>
                </div>
                <div>
                    <h6 class="text-uppercase">e-mail</h6>
                    <p>ammournada19@gmail.com</p>
                </div>

            </div>

        </div>
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                    href="https://www.facebook.com/profile.php?id=100016738602511" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;"
                    href="https://www.google.com/?hl=fr" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/NADA-amr2001/pfc_laravel" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

    </footer>


    <!--login modal-->
    <div class="modal fade " id="login">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
            <div class="modal-content user_card">
                <div class="modal-body">
                    <div class="d-flex justify-content-center h-100">
                        <div class="">
                            <div class="d-flex justify-content-center" style="margin-bottom: 30px">
                                <div class="brand_logo_container">
                                    <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center form_container">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3 mt-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        <input id="email" type="email" placeholder="Email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      </div>
                                     @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                     @enderror
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>

                                        <input id="password" placeholder="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">
                                      </div>
                                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 login_container">
                                        <button type="submit" name="button" class="btn login_btn">Login</button>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-center links">
                                            Don't have an account? <a style="color: #fff;" id="signup-link"
                                                data-dismiss="modal" id="signup-link" href="#signup" data-toggle="modal"
                                                data-target="#signup" role="tab" data-bs-target="#signup"
                                                data-bs-toggle="modal" class="ml-2">Sign Up</a>
                                        </div>
                                        <div class="d-flex justify-content-center links">
                                            @if (Route::has('password.request'))
                                                <a class="ml-2" style="color: #fff;" class="btn btn-link"
                                                    data-dismiss="modal" id="signup-link" href="#forgot-password"
                                                    data-toggle="modal" data-target="#forgot-password" role="tab"
                                                    data-bs-target="#forgot-password" data-bs-toggle="modal"
                                                    class="ml-2">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <!--sign up modal-->
    <div class="modal fade " id="signup" aria-hidden="true" aria-labelledby="signupToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="height: 450px; width: 400px; padding: 0;">
            <div class="modal-content user_card">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <div class="brand_logo_container">
                                        <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center form_container">
                                    <form style="width: 200px;" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-group mb-3 mt-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>

                                            <input id="name" type="text"
                                                class="form-control input_pass input_user @error('name') is-invalid @enderror"
                                                placeholder="Name" name="name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>

                                          </div>
                                          @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                         @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>

                                            <input id="email" type="email"
                                                class="form-control input_pass @error('email') is-invalid @enderror"
                                                placeholder="E-mail Adress" name="email" value="{{ old('email') }}"
                                                required autocomplete="email">

                                          </div>
                                          @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>

                                            <input id="password" type="password" placeholder="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                          </div>
                                          @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>

                                            <input id="password-confirm" type="password" placeholder="Confirm password"
                                                class="form-control" name="password_confirmation" required
                                                autocomplete="new-password">
                                         </div>
                                        </div>

                                        <div class="input-group mb-2">
                                            <select style="height:35px; width:200px" class="form-select" name="type"
                                                aria-label="Default select example">
                                                <option selected>      Seller Or Buyer</option>
                                                <option value="0">Buyer</option>
                                                <option value="1">Seller</option>
                                            </select>
                                        </div>
                                        <br>

                                        <div class="d-flex justify-content-center mt-3 login_container">
                                            <button type="submit" name="button" class="btn login_btn">{{ __('Sign Up') }}</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-center links">
                                        <a style="color: #fff;" id="login-link" data-dismiss="modal" id="login-link"
                                            data-toggle="modal" data-target="#login" role="tab" href="#login"
                                            data-bs-target="#login" data-bs-toggle="modal">I already have an
                                            account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--forgot password-->
    <div class="modal fade " id="forgot-password" aria-hidden="true" aria-labelledby="forgot-passwordToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="height: 450px; width: 400px; padding: 0;">
            <div class="modal-content user_card">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <div class="brand_logo_container">
                                        <img src="\image\lock.jpg" class="brand_logo" alt="Logo">
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center form_container">
                                    <form method="POST" action="{{ route('password.update') }}"
                                        style="width: 300px; ">
                                        @csrf
                                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                                        <div style="margin-bottom: 10px;">
                                            <h3 class="text-center">Forgot Password?</h3>
                                            <p class="text-center">You can reset your password here.</p>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-10">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-envelope-fill"></i></span>
                                                </div>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ $email ?? old('email') }}" required
                                                    autocomplete="email" autofocus value="" placeholder="E-mail Adress"
                                                    oninvalid="setCustomValidity('Please enter a valid email address!')"
                                                    onchange="try{setCustomValidity('')}catch(e){}" required="">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-group mb-10">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-key"></i></span>
                                                </div>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password"
                                                    placeholder="password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-group mb-10">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-key"></i></span>
                                                </div>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="confirm password">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3 login_container">
                                            <button type="submit" class="btn login_btn">
                                                {{ __('Reset Password') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-center links">
                                        <a style="color: #fff;" data-dismiss="modal" id="login-link" data-toggle="modal"
                                            data-target="#login" role="tab" href="#login" data-bs-target="#login"
                                            data-bs-toggle="modal">LOGIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    {{-- contact us --}}
    <div class="modal fade " id="contact">
        <div class="modal-dialog modal-dialog-xl modal-dialog-centered">
            <div class="modal-content ">

                <div class="modal-body">

                    <div class=" text-center mt-5 ">
                        <h1 style=" margin-bottom: 40px; color:#60a3bc">Contact Us</h1>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="row ">
                        <div class="col-lg-12 mx-auto">
                            <div class="card mt-2 mx-auto p-1 bg-light">
                                <div id="card_l" class="card-body bg-light">
                                    <div class="container" style="width: 440px">
                                        <form id="contact-form" role="form" method="post" action="contact-us">
                                            {{ csrf_field() }}
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label id="cont_l" for="form_fname">Firstname</label>
                                                            <input id="form_fname" type="text"
                                                                class="form-control @error('fname') is-invalid @enderror"
                                                                type="text" name="fname"
                                                                placeholder="Please enter your firstname "
                                                                required="required" data-error="Firstname is required.">
                                                            @error('fname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label id="cont_l" for="form_lname">Lastname</label>
                                                            <input id="form_lname" type="text"
                                                                class="form-control @error('lname') is-invalid @enderror"
                                                                type="text" name="lname"
                                                                placeholder="Please enter your last name "
                                                                required="required"
                                                                data-error="Last tname is required.">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label id="cont_l" for="form_email">Email </label>
                                                            <input type="text"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                id="form_email" type="email" name="email"
                                                                placeholder="Please enter your email "
                                                                required="required"
                                                                data-error="Valid email is required.">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label id="cont_l" for="form_phone">Phone </label>
                                                            <input type="text"
                                                                class="form-control @error('phone') is-invalid @enderror"
                                                                name="phone" id="form_phone"
                                                                placeholder="Please enter your phone "
                                                                required="required"
                                                                data-error="Valid phone is required.">
                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div style="margin-left: 90px" class="form-group">
                                                            <label id="cont_l" for="form_need">Please specify your need
                                                                *</label>
                                                            <select id="form_need" style="height: 35px" name="need"
                                                                class="form-control" required="required"
                                                                data-error="Please specify your need.">
                                                                <option value="" selected disabled>--Select Your Issue--
                                                                </option>
                                                                <option>Request Invoice for order</option>
                                                                <option>Request order status</option>
                                                                <option>Haven't received cashback yet</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label id="cont_l" for="form_message">Message *</label>
                                                            <textarea class="form-control textarea @error('msg') is-invalid @enderror" name="msg" id="form_message"
                                                                placeholder="Write your message here." rows="4"
                                                                required="required"
                                                                data-error="Please, leave us a message."></textarea>
                                                            @error('message')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-send  pt-2 btn-block"
                                                            style="margin-left:100px">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/app_new.js') }}"></script>
<script>
    var path = "{{ request()->path() }}";
    @if ( request()->path() == 'login')
        document.querySelector('[href="#login"]').click();
    @endif
    @if ( request()->path() == 'register')
        document.querySelector('[href="#signup"]').click();
    @endif
</script>

</body>

</html>
