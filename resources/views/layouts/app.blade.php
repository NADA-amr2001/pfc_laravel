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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/quantity.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/c1d51a72c4.js"></script>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css')}}">
</head>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div id="app">
          <!--nav-->
     <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top ">
        <div class="container">
            <img id="navlogo" href="{{ url('/') }}" src="/image/logo@2x.png" alt="logo" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="bar" class="fas fa-bars"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a id="rech-btn" class="nav-link" data-toggle="modal"  data-bs-target="#rech" role="tab" data-target="#rech" ><i style="color: black; margin-top: 10px; font-size: 30px;" class="bi bi-search"></i></a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link active" href="/">Home</a>
              </li>
              @php

               $categories = App\Models\Category::all();
              @endphp
              <li class="nav-item">
                <div class="dropdown me-2">
                  <a style="margin-top: 10px;" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">Shop</a>
                  <ul class="dropdown-menu"  aria-labelledby="dropdownMenuOffset">
                    @foreach ($categories as $category)
                     <li><a class="dropdown-item" id="medic-btn" href="/categories/{{$category->id}}">{{$category->title}}</a></li>
                    @endforeach


                    <!-- <li><a class="dropdown-item" id="food-btn"  href="/food">Food</a></li>
                    <li><a class="dropdown-item" id="equip-btn" href="/equipements">Equipements</a></li> -->
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="/#services">Our Services</a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="/#about">About Us</a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="#footer">Contact Us</a>
              </li>
              <li class="nav-item">
                <div>
                  <i style="font-size: 30px !important;" href="/cart" class="bi bi-cart-plus-fill"></i>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown me-2">
                  <a style="" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"> <i style="font-size: 30px !important;  " class="bi bi-person-circle"></i> </a>

                  <ul class="dropdown-menu"  aria-labelledby="dropdownMenuOffset">
                    @guest
                    <li><a class="dropdown-item" id="login-btn"  data-toggle="modal"  data-target="#login" data-bs-target="#login" role="tab" href="#login">LOG IN</a></li>
                    <li><a class="dropdown-item" id="signup-btn" data-toggle="modal"  data-target="#signup" data-bs-target="#signup" role="tab" href="#signup" >SIGN UP</a></li>
                    @endguest
                    @auth
                    <li><a class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="/logout" >Log Out</a></li>
                    @endauth
                  </ul>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
         <!--login modal-->
       <div class="modal fade " id="login" >
          <div class="modal-dialog modal-dialog-lg modal-dialog-centered"   >
            <div class="modal-content user_card" >

              <div class="modal-body" >
                     <div class="d-flex justify-content-center h-100">
                       <div class="">
                         <div class="d-flex justify-content-center" style="margin-bottom: 30px">
                           <div class="brand_logo_container">
                             <img src="image/mrare.png" class="brand_logo" alt="Logo">
                           </div>
                         </div>
                         <div class="d-flex justify-content-center form_container">
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-3">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                              @enderror
                            </div>
                            <div class="input-group mb-2">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                               @error('password')
                                 <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                 </span>
                               @enderror
                            </div>
                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>
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
                                Don't have an account? <a style="color: #fff;" id="signup-link" data-dismiss="modal" id="signup-link" href="#signup" data-toggle="modal" data-target="#signup" role="tab" data-bs-target="#signup" data-bs-toggle="modal" class="ml-2">Sign Up</a>
                              </div>
                              <div class="d-flex justify-content-center links">
                                  @if (Route::has('password.request'))
                                    <a class="ml-2" style="color: #fff;" class="btn btn-link"  data-dismiss="modal" id="signup-link" href="#forgot-password" data-toggle="modal" data-target="#forgot-password" role="tab" data-bs-target="#forgot-password" data-bs-toggle="modal" class="ml-2">
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
      <div class="modal-dialog modal-dialog-centered modal-lg" style="height: 450px; width: 400px; padding: 0;"  >
          <div class="modal-content user_card">
              <!-- Modal body -->
              <div class="modal-body">
               <div class="container h-100">
                  <div class="d-flex justify-content-center h-100">
                    <div class="">
                      <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                          <img src="image/mrare.png" class="brand_logo" alt="Logo">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center form_container">
                        <form style="width: 200px;" method="POST" action="{{ route('register') }}">
                        @csrf
                          <div class="input-group mb-2 mt-2" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                          <input  id="name" type="text" class="form-control input_pass input_user @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control input_pass @error('email') is-invalid @enderror" placeholder="E-mail Adress" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>

                          <div class="input-group mb-2">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Seller Or Buyer</option>
                                <option value="shopper">Buyer</option>
                                <option value="seller">Seller</option>
                              </select>
                          </div>

                            <div class="d-flex justify-content-center mt-3 login_container">
                         <button type="submit" name="button" class="btn login_btn">{{ __('Sign Up') }}</button>
                         </div>
                        </form>
                      </div>

                      <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                        <a style="color: #fff;" id="login-link" data-dismiss="modal" id="login-link" data-toggle="modal" data-target="#login" role="tab" href="#login" data-bs-target="#login" data-bs-toggle="modal" >I already have an account</a>
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
<div class="modal fade " id="forgot-password" aria-hidden="true" aria-labelledby="forgot-passwordToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg" style="height: 450px; width: 400px; padding: 0;"  >
      <div class="modal-content user_card">
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container h-100">
              <div class="d-flex justify-content-center h-100">
                <div class="">
                  <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                      <img src="image/lock.jpg" class="brand_logo" alt="Logo">
                    </div>

                  </div>
                  <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('password.update') }}" style="width: 300px; " >
                        @csrf
                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                      <div style="margin-bottom: 10px;">
                        <h3 class="text-center">Forgot Password?</h3>
                        <p class="text-center">You can reset your password here.</p>
                      </div>
                        <div class="form-group">
                          <div class="input-group mb-10">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus  value="" placeholder="E-mail Adress" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="input-group mb-10">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="input-group mb-10">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
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
                    <a style="color: #fff;" data-dismiss="modal" id="login-link" data-toggle="modal" data-target="#login" role="tab" href="#login" data-bs-target="#login" data-bs-toggle="modal">LOGIN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>-->


        <div style="margin-top: 100px" class="row">
           <div class="div.col-md-8 mx-auto my-4">
               @include('layouts.alerts')
           </div>

        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="footer" class=" text-center mt-5 py-2">
            <div class="row container mx-auto pt-5">
              <div class="footer-one col-lg-4 col-md-6 col-12">
                <img style="margin-bottom: 20px; font-size: 100px;" id="navlogo" src="/image/footer@2x.png" alt="logo">
                <p>Hello and welcome to M-Rare Store, the place to find the best medicines, foods and all the supplies of rare diseases.</p>

              </div>
              <div class="footer-one col-lg-3 col-md-6 col-12">
                <h4 class="pb-2"><p>Navigation</p></h4>
                <ul class="text-uppercase list-unstyled">
                  <li><a href="#homme"><p>Homme</p></a></li>
                  <li>
                      <div class="btn-group">
                         <a  class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"><p>Shop</p></a>
                         <ul style="background-color: #60a3bc;" class="dropdown-menu">
                             <li><a class="dropdown-item" id="medic-btn" href="http://127.0.0.1:8000/medicines"><p>Medicines</p></a></li>
                             <li><a class="dropdown-item" id="food-btn"  href="http://127.0.0.1:8000/food"><p>Food</p></a></li>
                             <li><a class="dropdown-item" id="equip-btn" href="http://127.0.0.1:8000/equipements"><p>Equipements</p></a></li>
                         </ul>
                        </div>
                  </li>
                  <li><a href="#"><p>Our Services</p></a></li>
                  <li><a href="#about"><p>About Us</p></a></li>
                  <li><a href="#"><p>Contact Us</p></a></li>
                </ul>

              </div>


              <div class="footer-one col-lg-3 col-md-6 col-12">
                <h4 class="pb-2"><p>Contact</p></h4>
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
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #3b5998;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #55acee;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #dd4b39;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #ac2bac;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #0082ca;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <!-- Github -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #333333;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

          </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset ('js/app_new.js')}}"></script>
    </div>

</body>
</html>
