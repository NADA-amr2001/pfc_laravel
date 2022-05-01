

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contejunt="width=device-width, initial-scale=1.0">
    <title>M-Rare</title>
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

<!--font-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/c1d51a72c4.js"></script>
    
    <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css')}}">
    
</head>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

  
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container fade">
            <img id="navlogo" src="image/logo@2x.png" alt="logo" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="bar" class="fas fa-bars"></span>
          </button>
            
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">  
              <li class="nav-item">
                <a id="rech-btn" class="nav-link" data-toggle="modal"  data-bs-target="#rech" role="tab" data-target="#rech" ><i style="color: black; margin-top: 10px; font-size: 30px;" class="bi bi-search"></i></a> 
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link active" href="#homme">Home</a>
              </li>
              <li class="nav-item"> 
                <div class="dropdown me-2">
                  <a style="margin-top: 10px;" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">Shop</a>
                  <ul class="dropdown-menu"  aria-labelledby="dropdownMenuOffset">
                    <li><a class="dropdown-item" id="medic-btn" href="http://127.0.0.1:8000/medicines">Medicines</a></li>
                    <li><a class="dropdown-item" id="food-btn"  href="http://127.0.0.1:8000/food">Food</a></li>
                    <li><a class="dropdown-item" id="equip-btn" href="http://127.0.0.1:8000/equipements">Equipements</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="#services">Our Services</a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 10px;" class="nav-link" href="#footer">Contact Us</a>
              </li>
              <li class="nav-item">
                <div>
                  <i style="font-size: 30px !important;" class="bi bi-cart-plus-fill"></i>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown me-2">
                  <a style="" class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"> <i style="font-size: 30px !important;  " class="bi bi-person-circle"></i> </a>
                  <ul class="dropdown-menu"  aria-labelledby="dropdownMenuOffset">
                    <li><a class="dropdown-item" id="login-btn"  href="http://127.0.0.1:8000/login">LOG IN</a></li>
                      <li><a class="dropdown-item" id="signup-btn"  href="http://127.0.0.1:8000/register" >SIGN UP</a></li>
                  </ul>
                </div> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--recherche modal-->
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
    </div>
    <section id="homme">
        @extends('layouts.app')

            @section('content')
                <div class="container h-100">
                    <div class="d-flex justify-content-center h-100">
                      <div class="user_card">
                        <div class="d-flex justify-content-center">
                          <div class="brand_logo_container">
                            <img src="image/mrare.png" class="brand_logo" alt="Logo">
                          </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                          <form method="POST" action="{{ route('login') }}">
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
                                 Don't have an account? <a style="color: #fff;" id="signup-link" href="http://127.0.0.1:8000/register"  class="ml-2">Sign Up</a>
                             </div>
                             <div class="d-flex justify-content-center links">
                                @if (Route::has('password.request'))
                                    <a class="ml-2" style="color: #fff;" class="btn btn-link" href="{{ route('password.request') }}">
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
            @endsection 
            </section>    

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset ('js/app_new.js')}}"></script>
</body>
</html>   
