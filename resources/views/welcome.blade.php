@extends('layouts.app')
@section('content')

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
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s; ">Welcome to M-Rare Store</h5>
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
                <p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="medic-btn"  href="/categories/1">Buy Now</a></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/food/food.webp" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Food</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the food you need.</p>
                </div>
                <p class="animated bounceIbRight" style="animation-delay: 3s;"><a href="/categories/2">Buy Now</a></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/equipement/equipement.jfif" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">equipment</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the equipment you need.</p>
                </div>
                <p class="animated bounceIbRight" style="animation-delay: 4s;"><a id="equip-btn" href="/categories/3">Buy Now</a></p>
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
                    <img  src = "/image/about-us.png" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
