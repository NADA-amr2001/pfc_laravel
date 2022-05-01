<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipements</title>
    
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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!--font-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/c1d51a72c4.js"></script>
    
    <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css')}}">

</head>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--jquery-->
    <script type="text/javascript">
       $("#rech-btn").on("click",function(e){
          e.preventDefault();
         $('#rech').modal('show');
      })
    </script>

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
 <section id="equip" style="margin-top: 120px;">
    <div class="row mx-auto container">
        <div class="card" id="buy-card">
          <img src="image/equipement/equip1@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Déambulateur avec roues</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
        <div class="card" id="buy-card">
          <img src="image/equipement/equip2@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chése roulant</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
        <div class="card" id="buy-card">
          <img src="image/equipement/equip3@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">.....</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
        <div class="card" id="buy-card">
          <img src="image/equipement/equip4@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">.....</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
        <div class="card" id="buy-card">
          <img src="image/equipement/equip5@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casque</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
        <div class="card" id="buy-card">
          <img src="image/equipement/equip6@2x.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casque</h5>
            <p class="card-text">1000 DA</p>
            <a id="buy" href="#" class="btn ">Details</a>
          </div>
        </div>
      </div>

      <div id="detail" class="modal fade" tabindex="-1" role="dialog" style="display: none;" >
        <div class="modal-dialog modal-dialog-centered" style="max-width: 800px!important; " role="document">
          <div class="modal-content" style="height: 100%;" id="details" >
              <button id="closemodal"  data-dismiss="modal" class="w3-button w3-display-topright" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; color: #666666; font-size: 20px; border: none; margin-top: 5px;"><i style=" margin-left: 720px;" class="bi bi-x-lg"></i></button>
            <div class="modal-body"  >
              <div class="container">
                <div class="card" id="d-card">
                  <div class="container-fliud">
                    <div class="wrapper row">
                      <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img id="d-img" src="image/medicines/lovenox@2x.png" /></div>
                        </div>
                      </div>
                      <div class="details col-md-6">
                        <h3 class="product-title">Lovenox</h3>
                        <p class="product-description">......................................</p>
                        <h4 class="price">current price:<br> <span>1000 DA</span></h4>
                        <p class="vote"><strong>91%</strong> of buyers use this product! <strong>(87 votes)</strong></p>
                        <p><strong> Quantity:</strong></p>
                        <div style="width: 150px; height: 40px;" class="input-group">
                          <span class="input-group-btn">
                              <button id="qnt-btnm" type="button" class="btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                  <span class="glyphicon glyphicon-minus"><i class="bi bi-dash-lg"></i></span>
                              </button>
                          </span>
                          <input style="height: 40px;" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
                          <span class="input-group-btn">
                              <button id="qnt-btnp" type="button" class="  btn-number" data-type="plus" data-field="quant[1]">
                                  <span class="glyphicon glyphicon-plus"><i class="bi bi-plus-lg"></i></span>
                              </button>
                          </span>
                      </div>
                        <div>
                          <button type="button" id="add" class="add-to-cart " style="width: 150px;" >Add To Cart</button>
                          <button type="button" id="like" style="background: none; " class="like "><span style="font-size: 30px; margin-left: 30px;" class="fa fa-heart"></span></button>
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
<script type="text/javascript" src="{{ asset ('js/quantity.js')}}"></script>
    
</body>
</html>