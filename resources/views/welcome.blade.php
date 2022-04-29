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
        <div class="container">
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
                    <li><a class="dropdown-item" id="login-btn" data-toggle="modal" href="{{ route('login') }}" data-bs-dismiss="modal" data-target="#login" data-bs-target="#login" role="tab">LOGIN</a></li>
                      <li><a class="dropdown-item" id="signup-btn"  href="{{ route('register') }}" >SIGN UP</a></li>
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
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/homme@2x.png" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Welcome to M-Rare Store</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">We have medicines, foods and all the supplies of rare diseases .</p>
                </div> 
                  <!--<p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="login-btn" data-toggle="modal" href="#login" data-target="#login" data-bs-target="#login" role="tab">Login</a> </p>

                  <p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="signup-btn" data-toggle="modal" href="#signup" data-target="#signup" data-bs-target="#login" role="tab">Sign Up</a></p>-->
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/medicines/22.jfif" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Medicines</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the medicine you need.</p>
                </div>  
                <p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="medic-btn" data-toggle="modal" data-bs-target="#medic" data-target="#medic" role="tab" href="#medic">Learn More</a></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/food/food.webp" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Food</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the food you need.</p>
                </div>
                <p class="animated bounceIbRight" style="animation-delay: 3s;"><a href="file:///C:/Users/dell/Desktop/M-Rare/shop.html">Learn More</a></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/equipement/equipement.jfif" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">equipment</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the equipment you need.</p>
                </div>
                <p class="animated bounceIbRight" style="animation-delay: 4s;"><a id="equip-btn" data-toggle="modal" data-bs-target="#equip" data-target="#equip" role="tab" href="#equip">Learn More</a></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <!--<span class="visually-hidden">Previous</span>--> 
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <!--<span class="visually-hidden">Next</span>--> 
          </button>
        </div>

        <!--login modal-->
        <div class="modal fade " id="login" aria-hidden="true" aria-labelledby="loginToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered modal-lg" style="height: 450px; width: 400px; padding: 0;"  >
              <div class="modal-content">
                  <!-- Modal body -->
                  <div class="modal-body">
                   <div class="container h-100">
                    <div class="d-flex justify-content-center h-100">
                      <div class="user_card">
                        <div class="d-flex justify-content-center">
                          <div class="brand_logo_container">
                            <img src="image/mrare.png" class="brand_logo" alt="Logo">
                          </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                          <form>
                            <div class="input-group mb-3">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" name="username" class="form-control input_user" value="" placeholder="username">
                            </div>
                            <div class="input-group mb-2">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                            </div>
                            <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                              </div>
                            </div>
                              <div class="d-flex justify-content-center mt-3 login_container">
                           <button type="button" name="button" class="btn login_btn">Login</button>
                           </div>
                          </form>
                        </div>
                    
                        <div class="mt-4">
                          <div class="d-flex justify-content-center links">
                            Don't have an account? <a style="color: #fff;" data-dismiss="modal" id="signup-link" href="#signup" data-toggle="modal" data-target="#signup" role="tab" data-bs-target="#signup" data-bs-toggle="modal" class="ml-2">Sign Up</a>
                          </div>
                          <div class="d-flex justify-content-center links">
                            <a style="color: #fff;" href="#"  data-dismiss="modal" id="forgot-password-link" href="#forgot-password" data-toggle="modal" data-target="#forgot-password" role="tab" data-bs-target="#forgot-password" data-bs-toggle="modal" class="ml-2">Forgot your password?</a>
                          </div>
                        </div>
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
          <div class="modal-content">
              <!-- Modal body -->
              <div class="modal-body">
                <div class="container h-100">
                  <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                      <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                          <img src="image/mrare.png" class="brand_logo" alt="Logo">
                        </div>
                      </div>
                      <div class="d-flex justify-content-center form_container">
                        <form style="width: 300px;">
                          <div class="input-group mb-2 mt-2" >
                            <input style="margin-right: 5px;" type="text" name="" class="form-control input_user" value="" placeholder="First Name">
                            <input style="margin-left: 5px;" type="text" name="" class="form-control input_user" value="" placeholder="Last Name">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            </div>
                            <input type="number" name="" class="form-control input_pass" value="" placeholder="Phone">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            </div>
                            <input type="text" name="" class="form-control input_pass" value="" placeholder="E-mail Adress">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                          </div>
                          <div class="input-group mb-2">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="" class="form-control input_pass" value="" placeholder="Confirm password">
                          </div>
                        
                            <div class="d-flex justify-content-center mt-3 login_container">
                         <button type="button" name="button" class="btn login_btn">Sign Up</button>
                         </div>
                        </form>
                      </div>
                  
                      <div class="mt-4">
                        <div class="d-flex justify-content-center links"> 
                        <a style="color: #fff;" data-dismiss="modal" id="login-link" data-toggle="modal" data-target="#login" role="tab" href="#login" data-bs-target="#login" data-bs-toggle="modal">I already have an account</a>
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
      <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container h-100">
              <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                  <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                      <img src="image/lock.jpg" class="brand_logo" alt="Logo">
                    </div>
                    
                  </div>
                  <div class="d-flex justify-content-center form_container">               
                    <form style="width: 300px; " action="forgot.php" method="post">
                      <div style="margin-bottom: 70px;">
                        <h3 class="text-center">Forgot Password?</h3>
                        <p class="text-center">You can reset your password here.</p>
                      </div>
                        <div class="form-group">
                          <div class="input-group mb-10">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            </div> 
                            <input type="text" name="c_email" class="form-control input_pass" value="" placeholder="E-mail Adress" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                          </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                          <button type="submit" name="forgot_pass" class="btn login_btn">Send My Password</button>
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
</div>
      </section>
       
     

      <section id="featured" class="my-5 pd-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our featured</h3>
          <hr class="mx-auto">
          <p>Here you can check out on M-Rare Store</p>
        </div>
        <div class="row mx-auto container">
          <div id="buy-card" class="card" >
            <img src="image/medicines/lovenox@2x.png" class="card-img-top" alt="...">
            <div class="card-body" style="position:center;">
              <h5 class="card-title">Lovenox</h5>
              <p class="card-text">1000 DA</p>
              <a id="buy" href="#" class="btn ">Details</a>
            </div>
          </div>
          <div class="card" id="buy-card">
            <img src="image/medicines/actifed@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Actifed</h5>
              <p class="card-text">1000 DA</p>
              <a href="#" class="btn ">Details</a>
            </div>
          </div>
          <div class="card" id="buy-card">
            <img src="image/medicines/humex@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Humex</h5>
              <p class="card-text">1000 DA</p>
              <a href="#" class="btn ">Details</a>
            </div>
          </div>
          <div class="card" id="buy-card">
            <img src="image/medicines/evifen@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Evifen</h5>
              <p class="card-text">1000 DA</p>
              <a href="#" class="btn ">Details</a>
            </div>
          </div>
          <div class="card" id="buy-card">
            <img src="image/medicines/risonate@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Risonate</h5>
              <p class="card-text">1000 DA</p>
              <a href="#" class="btn ">Details</a>
            </div>
          </div>

        </div>

        
      </section>

      <section id="services">
        <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
          <div class="hd">Why People Believe in Us</div>
          <hr style="width: 350px; color: #60a3bc; height: 10px;" class="mx-auto">
          <p>Always render more and better service than <br />is expected of you, no matter what your ask may be.</p>
          <div class="row" style="justify-content: center">
              <div id="service-card" class="card col-md-3 col-12">
                  <div class="card-content">
                      <div class="card-body"> <img style="margin-bottom: 20px;" src="image/service/livraison@2x.png" />
                          <div class="shadow"></div>
                          <div id="service-card-title" class="card-title"> FREE SHOPPING & FAST DELIVERY</div>
                          <div class="card-subtitle">
                              <p> <small class="text-muted">Delivery available everywhere in Algeria.</small> </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="service-card" class="card col-md-3 col-12 ml-2">
                  <div class="card-content">
                      <div class="card-body"> <img style="margin-bottom: 20px;" src="image/service/paiement@2x.png" />
                          <div id="service-card-title" class="card-title">SECURE PAYMENT</div>
                          <div class="card-subtitle">
                              <p> <small class="text-muted">Money back guarantee </small> </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="service-card" class="card col-md-3 col-12 ml-2">
                  <div class="card-content">
                      <div class="card-body"> <img style="margin-bottom: 20px;" src="image/service/service@2x.png" />
                          <div id="service-card-title" class="card-title">ALWAYS AT YOUR SERVICE</div>
                          <div class="card-subtitle">
                              <p> <small class="text-muted">Contact us for any complaint at:<br>+213 658 26 67 59.</small> </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </section>

      <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h1 class = "position-relative d-inline-block ms-4">About Us</h1>
                    </div>
                    <p class = "lead text-muted">M-Rare Store</p>
                    <p> Hello and welcome to M-Rare Store, the place to find the best medicines, foods and all the supplies of rare diseases. We thoroughly check the quality of our goods, working only with reliable suppliers so that you only receive the best quality product.<br>
                      We at M-Rare Store believe in high quality and exceptional customer service. But most importantly, we believe shopping is a right, not a luxury, so we strive to deliver the best products at the most affordable prices, and ship them to you regardless of where you are located.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img  src = "image/about-us.png" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>

      <footer id="footer" class=" text-center mt-5 py-2">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-4 col-md-6 col-12">
            <img style="margin-bottom: 20px; font-size: 100px;" id="navlogo" src="image/footer@2x.png" alt="logo">
            <p>Hello and welcome to M-Rare Store, the place to find the best medicines, foods and all the supplies of rare diseases.</p>

          </div>
          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Navigation</h5>
            <ul class="text-uppercase list-unstyled">
              <li><a href="#homme">Homme</a></li>
              <li>
                  <div class="btn-group">
                     <a  class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                     <ul style="background-color: #60a3bc;" class="dropdown-menu">
                         <li><a class="dropdown-item" id="medic-btn" href="http://127.0.0.1:8000/medicines">Medicines</a></li>
                         <li><a class="dropdown-item" id="food-btn"  href="http://127.0.0.1:8000/food">Food</a></li>
                         <li><a class="dropdown-item" id="equip-btn" href="http://127.0.0.1:8000/equipements">Equipements</a></li>
                     </ul>
                    </div>
              </li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>

          </div>

         
          <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Contact</h5>
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
    
    
</body>
</html>