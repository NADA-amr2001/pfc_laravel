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
              <img src="image/2x/welcome@2x.png" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                {{-- <div class="txt" id="txt" style=" width: 300px; margin-bottom: 50px; margin-left: 60px; ">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s; color:#ff6633; font-familly: bold;">Welcome to M-Rare Store</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s; color:#6666cc">We have medicines, foods and all the supplies of rare diseases .</p>
                </div> --}}
                  <!--<p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="login-btn" data-toggle="modal" href="#login" data-target="#login" data-bs-target="#login" role="tab">Login</a> </p>

                  <p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="signup-btn" data-toggle="modal" href="#signup" data-target="#signup" data-bs-target="#login" role="tab">Sign Up</a></p>-->

              </div>
            </div>
            <div class="carousel-item">
              <img src="image/medicines/medicine.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 0.5s;">Medicines</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s;">Find the medicine you need.</p>
                </div>
                {{-- <p class="animated bounceIbRight" style="animation-delay: 3s;"><a id="medic-btn"  href="/categories/1">Buy Now</a></p> --}}
              </div>
            </div>
            <div class="carousel-item">
                <img src="image/parapharmacie/parapharmacy.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                  <div class="txt" id="txt">
                    <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Parapharmacy</h5>
                    <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s; color: white;">Find the Parapharmacy you need.</p>
                  </div>
                  {{-- <p class="animated bounceIbRight" style="animation-delay: 4s;"><a id="equip-btn" href="/categories/3">Buy Now</a></p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/food_suplements.png" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                  <div class="txt" id="txt">
                    <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Food Supplements</h5>
                    <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s; color: white;">Find the Food Supplements you need.</p>
                  </div>
                  {{-- <p class="animated bounceIbRight" style="animation-delay: 4s;"><a id="equip-btn" href="/categories/3">Buy Now</a></p> --}}
                </div>
            </div>
            {{-- <div class="carousel-item">
                <img src="image/food/food.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                  <div class="txt" id="txt">
                    <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Medical Materials</h5>
                    <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s; color: white;">Find the Medical Materials you need.</p>
                  </div>
                  {{-- <p class="animated bounceIbRight" style="animation-delay: 3s;"><a href="/categories/2">Buy Now</a></p> --}}
                {{-- </div>
              </div> --}}
            <div class="carousel-item">
              <img src="image/food/food.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <div class="txt" id="txt">
                  <h5 class="animated bounceIbRight" style="animation-delay: 1s;">Food</h5>
                  <p class="animated bounceIbLeft d-none d-md-block" style="animation-delay: 2s; color: white;">Find the food you need.</p>
                </div>
                {{-- <p class="animated bounceIbRight" style="animation-delay: 3s;"><a href="/categories/2">Buy Now</a></p> --}}
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
            <div >
                <h3>Our Favorites</h3>
                <hr class="mx-auto" style="color: #ff6633; width:100px">
                <p>Here you can check out on M-Rare Store</p>
            </div>
          <div class="row mx-auto container">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner" style=" display: flex;">

                        @foreach ($wishlists as $wishlist)
                        <div class="item">
                            <div class="card" onclick="openproduct()" id="buy-card">
                                @guest
                                <img style="width:24rem; height:130px" data-toggle="modal" data-bs-target="#detail-{{ $wishlist->product_id  }}" data-target="#detail-{{ $wishlist->product_id }}" role="tab" href="#detail-{{ $wishlist->product_id}}" class="btn " src="{{ $wishlist->product->image }}" class="card-img-top" alt="{{ $wishlist->product->title }}">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $wishlist->product->title }}</h5>
                                    <p class="card-text">{{ $wishlist->product->price }} DA</p>
                                       <a id="detail-btn" data-toggle="modal" data-bs-target="#detail-{{ $wishlist->product_id }}" data-target="#detail-{{ $wishlist->product_id }}" role="tab" href="#detail-{{ $wishlist->product_id }}" class="btn " >Details</a>
                                </div>
                                @endguest

                                @auth
                                @if (auth()->user()->id == $wishlist->product->user_id)
                                <img style="width:24rem; height:160px" href="" class="btn "  data-toggle="modal" data-bs-target="#detail-{{ $wishlist->product->id }}" data-target="#detail-{{ $wishlist->product->id }}" role="tab" href="" class="btn "
                                src="{{ asset($wishlist->product->image) }}" class="card-img-top" alt="{{ $wishlist->product->title }}">
                                @else
                                <img style="width:24rem; height:130px" data-toggle="modal" data-bs-target="#detail-{{ $wishlist->product->id }}"
                                data-target="#detail-{{ $wishlist->product->id }}" role="tab" href="" class="btn "
                                src="{{ asset($wishlist->product->image) }}" class="card-img-top" alt="{{ $wishlist->product->title }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $wishlist->product->title }}</h5>
                                    <p class="card-text">{{ $wishlist->product->price }} DA</p>

                                        @if (auth()->user()->id == $wishlist->product->user_id)
                                         <div class="btn-container" style="display: flex;">
                                          <a id="detail-btn_{{ $wishlist->product->id }}" data-toggle="modal" data-bs-target="#update-{{ $wishlist->product->id }}"
                                            data-target="#update-{{ $wishlist->product->id }}" role="tab" href="#update-{{ $wishlist->product->id }}" class="btn "><i class="fa fa-edit"></i></a>
                                          <form id=" {{ $wishlist->product->id }} "  method="POST" action="{{ route("products.destroy",$wishlist->product->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button style="margin-left: 135px"  type="submit" onclick="return confirm('are you sure you want to delete this product ?')"
                                                  class="btn ">
                                              <i class="fa fa-trash"></i>
                                            </button>
                                          </form>
                                         </div>
                                        @else
                                        <div class="btn-container" style="display: flex;">
                                          <a id="detail-btn_{{ $wishlist->product->id }}" data-toggle="modal" data-bs-target="#detail-{{ $wishlist->product->id }}"
                                            data-target="#detail-{{ $wishlist->product->id }}" role="tab" href="#detail-{{ $wishlist->product->id }}" class="btn " style="margin-right:110px">Details</a>
                                          @auth
                                            <form action="{{ route('add.cart', $wishlist->product->id) }}" method="post">
                                              @csrf
                                              <input type="hidden" value="{{ $wishlist->product->id }}" name="id">
                                              <input type="hidden" value="{{ $wishlist->product->title }}" name="title">
                                              <input type="hidden" value="{{ $wishlist->product->price }}" name="price">
                                              <input type="hidden" value="{{ $wishlist->product->image }}"  name="image">
                                              <input type="hidden" value="1" name="qty">
                                              <button type="submit" id="add" class="add-to-cart btn"><i class="fa fa-shopping-cart"></i></button>
                                            </form>
                                          @endauth
                                          @guest
                                          <a id="add" class="add-to-cart btn"  data-toggle="modal"
                                          data-target="#login" data-bs-target="#login"
                                             ><i class="fa fa-shopping-cart"></i></a>
                                          @endguest
                                        </div>
                                       @endif

                                </div>
                                @endauth
                            </div>
                        </div>
                        @endforeach


//                         {{-- <div class="item">
//                             <div class="card" id="buy-card">
//                                 <img src="image/medicines/humex@2x.png" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                   <h5 class="card-title">Humex</h5>
//                                   <p class="card-text">1000 DA</p>
//                                   <a href="#" class="btn ">Details</a>
//                                 </div>
//                               </div>
//                         </div>
//                         <div class="item">
//                             <div class="card" id="buy-card">
//                                 <img src="image/medicines/lovenox@2x.png" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                   <h5 class="card-title">lovenox</h5>
//                                   <p class="card-text">1200 DA</p>
//                                   <a href="#" class="btn ">Details</a>
//                                 </div>
//                               </div>
//                         </div>
//                         <div class="item">
//                             <div class="card" id="buy-card">
//                                 <img src="image/food/vigor1@2x.png" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                   <h5 class="card-title">Vigor</h5>
//                                   <p class="card-text">450 DA</p>
//                                   <a href="#" class="btn ">Details</a>
//                                 </div>
//                               </div>
//                         </div>
//                         <div class="item">
//                             <div class="card" id="buy-card">
//                                 <img src="image/parapharmacie/equip6@2x.png" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                   <h5 class="card-title">Casque</h5>
//                                   <p class="card-text">5000 DA</p>
//                                   <a href="#" class="btn ">Details</a>
//                                 </div>
//                               </div>                        </div>
//                         <div class="item">
//                             <div class="card" id="buy-card">
//                                 <img src="image/medicines/covarinox @2x.png" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                   <h5 class="card-title">Covarinox</h5>
//                                   <p class="card-text">1500 DA</p>
//                                   <a href="#" class="btn ">Details</a>
//                                 </div>
//                               </div>
//                         </div>
//  --}}

                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
          </div>

          </div>
        </div>
    </section>

    {{-- @foreach ($wishlists as $wishlist)

    <div class="modal fade " id="update-{{ $wishlist->product->id }}">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
            <div class="modal-content user_card">

                <div class="modal-body">
                    <div class="d-flex justify-content-center h-100">

                            <div class="container h-100">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="">
                                        <div class="d-flex justify-content-center">
                                            <div class="brand_logo_container">
                                                <img src="{{ asset($wishlist->product->image) }}" class="brand_logo" alt="Logo">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center form_container">
                                            <form style="width: 200px;" method="POST" action="/products/{{$wishlist->product->id}}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="input-group mb-2 mt-2">
                                                    <input type="text"
                                                        class="form-control "
                                                        placeholder="Tilte" name="title"
                                                        value="{{ $wishlist->product->title }}">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input  type="text" class="form-control input_pass"
                                                        placeholder="Description" name="description"
                                                        value="{{ $wishlist->product->description }}" cols="15" rows="5">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input type="number" placeholder="price"
                                                        class="form-control" name="price" value="{{ $wishlist->product->price }}">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input type="number" placeholder="quantity in stock" min="{{ $wishlist->product->in_stock }}"
                                                        class="form-control" name="qty" value="{{ $wishlist->product->in_stock }}">
                                                </div>

                                                <div class="input-group mb-2">
                                                    <input id="image" type="file" class="form-control" name="image">
                                                </div>

                                                <div class="input-group mb-2">
                                                    {{-- <select required class="form-select" name="category_id"
                                                        aria-label="Default select example" style="width: 200px; height:35px;">
                                                        <option disabled selected>Select the category</option>
                                                        @php
                                                            $categories = App\Models\Category::all();
                                                        @endphp
                                                        @foreach ($categories as $category)
                                                           <option {{ $product->category_id === $category->id ? "selected" : "" }} value="{{ $category->id }}" >{{ $category->title }}</option>
                                                        @endforeach
                                                    </select> --}}
                                                    <select  required class="form-select" style="height:35px; width:200px" name="category_id">
                                                    <option disabled selected>Select the category</option>
                                                    @php
                                                      $categories = App\Models\Category::whereNull('category_id')->with("categories")->get();
                                                    @endphp
                                                    @foreach ($categories as $category)
                                                    @if ($category->categories!=null)

                                                        <optgroup label="{{ $category->title }}">
                                                            @foreach ($category->categories as $subcategory)
                                                                  <option {{ $wishlist->product->category_id === $subcategory->id ? "selected" : "" }} value="{{ $subcategory->id }}"> {{ $subcategory->title }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @else
                                                        <optgroup label="{{ $category->title }}">
                                                        </optgroup>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                </div>
                                                <br>

                                                <div class="d-flex justify-content-center mt-3 login_container">
                                                    <button type="submit" name="button"
                                                        class="btn login_btn">{{ __('Update Product') }}</button>
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
    {{-- </div>
        <div id="detail-{{ $wishlist->product->id }}" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
            <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                <div class="modal-content card " style="height: 100%; width: 100%" id="details">
                    <button id="closemodal" data-dismiss="modal" class="w3-button w3-display-topright" type="button"
                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="background: none; color: #666666; font-size: 30px; border: none; margin-top: 10px;"><i
                            style=" margin-left: 720px;" class="bi bi-x-lg"></i></button>
                    <div class="modal-body">
                        <div class="card" id="d-card">
                            <div class="container">
                                <div class="wrapper row">
                                    <div class="preview col-md-3">
                                        <div class="preview-pic tab-content">
                                            <div class="tab-pane active" id="pic-1"><img id="d-img"
                                                src="{{ asset($wishlist->product->image) }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details col-md-9">
                                        <h2 class="product-title">{{ $wishlist->product->title }}</h2>
                                        {{-- <span>{{ $product->category->title }}</span> --}}
                                        <p style="width: 300px" class="product-description">{{ $wishlist->product->description }}</p>
                                        <h4 class="price">current price:<br> <span>{{ $wishlist->product->price }}
                                                DA</span></h4>
                                        @auth
                                          @if (auth()->user()->id == $wishlist->product->user_id)
                                             <h4 class="price">My Product<br></h4>
                                          @endif
                                        @endauth
                                        @guest
                                          <h4 class="price">Seller Name:<br></h4>
                                          <h5>{{ $wishlist->product->user->name }}  <a href="mailto:{{ $wishlist->product->user->email }}">    Send Email</a></h5>
                                        @endguest
                                        <p class="vote"><strong>91%</strong> of buyers use this product!
                                            <strong>(87 votes)</strong></p>
                                        <p class="font-weight-bold">
                                            @if ($wishlist->product->in_stock > 0)
                                                <span class="text-success">
                                                    Available
                                                </span>
                                            @else
                                                <span class="text-danger">
                                                    Unavailable
                                                </span>
                                            @endif
                                        </p>
                                          @auth
                                          @if (($wishlist->product->in_stock >0) && (auth()->user()->id != $wishlist->product->user_id))
                                          <form action="{{ route('add.cart', $wishlist->product->id) }}" method="post">
                                            @csrf
                                            <p><strong> Quantity:</strong></p>
                                            <div style="width: 125px; height: 35px;" class="input-group">
                                                {{-- <span class="input-group-btn">
                                                    <button onclick="document.getElementById('qty-{{ $product->id }}').value--" id="qnt-btnm" type="button" class="btn-number"
                                                         data-type="minus" data-field="qty">
                                                        <span class="glyphicon glyphicon-minus"><i
                                                                class="bi bi-dash-lg"></i></span>
                                                    </button>
                                                </span> --}}



                                                <input  type="number" onkeyup="setQty('qty-{{$wishlist->product->id}}',{{ $wishlist->product->in_stock}})" style="height: 40px;" type="text" name="qty" id="qty-{{ $wishlist->product->id }}"
                                                    class="form-control input-number" value="1" min="1"
                                                    max="{{ $wishlist->product->in_stock }}">

                                                {{-- <span class="input-group-btn">
                                                    <button onclick="document.getElementById('qty-{{ $product->id }}').value++" id="qnt-btnp" type="button" class="  btn-number"
                                                        data-type="plus" data-field="qty">
                                                        <span class="glyphicon glyphicon-plus"><i
                                                                class="bi bi-plus"></i></span>
                                                    </button>
                                                </span> --}}
                                            </div>

                                            <div>

                                                @auth
                                                <button type="submit" id="add" class="add-to-cart btn " name="product_id" value="{{ $wishlist->product->id }}"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                                <button type="button" id="like" style="background: none; "class="like ">
                                                    @php
                                                        $countWishlist = 0
                                                    @endphp
                                                    @if(Auth::check(0))
                                                        @php
                                                            $countWishlist = App\Models\Wishlist::countWishlist($product['id'])
                                                        @endphp
                                                    @endif
                                                     <a class="update_wishlist" data-productid="{{ $wishlist->product->id }}" >
                                                        @if($countWishlist > 0) <i style="font-size: 30px; margin-left: 30px;" class="fas fa-heart fa-3x"></i>
                                                        @else <i style="font-size: 30px; margin-left: 30px;" class="far fa-heart fa-3x"></i>
                                                        @endif
                                                    </a>
                                                    {{-- @else
                                                     <a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->price}})"> <span style="font-size: 30px; margin-left: 30px;"  class="fa fa-heart"></span></a>
                                                    @endif --}}
                                                    </button>

                                                      {{-- <form  action="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                        <button type="submit" class="add-to-cart btn "
                                                           ><i class="fa fa-shopping-delete"></i> Delete product</button>

                                                       </form> --}}


                                                @endauth
                                            </div>
                                         </form>
                                        @endif
                                        @endauth
                                        @guest
                                        <a id="add" class="add-to-cart btn"  data-toggle="modal"
                                        data-target="#login" data-bs-target="#login"
                                           ><i class="fa fa-shopping-cart"></i>Login to Add To Cart</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        {{-- </div>
    @endforeach --}} 

    {{-- @endauth --}}

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

                <div id="about-txt" class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h1 class = "position-relative d-inline-block ms-4" style="color: #3399cc">About Us</h1>
                    </div>
                    <p class = "lead text-muted" style="color: #996699;">M-Rare Store</p>
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
