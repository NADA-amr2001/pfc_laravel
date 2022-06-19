@extends('layouts.app')
@section('content')
    <section id="medicines" style="margin-top:30px">


        {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset"> --}}
            {{-- @foreach ($categories as $category)
            @if ($category->categories!=null)
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"  href="/categories/{{ $category->id }}">{{ $category->title }}</a>
                <ul class="dropdown-menu">
                    @foreach ($category->categories as $subcategory)
                    <li><a class="dropdown-item"  href="/categories/{{ $subcategory->id }}">{{ $subcategory->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            @else
            <li><a class="dropdown-item" id="medic-btn"
                    href="/categories/{{ $category->id }}">{{ $category->title }}</a>
            </li>
            @endif
            @endforeach --}}
        {{-- </ul> --}}

            {{-- @php
                $categories = App\Models\Category::whereNull('category_id')->with("categories")->get();
            @endphp
            <ul class="nav nav-tabs">
                @foreach ($categories as $category )
                 @if ($category->categories!=null)
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$category->title}}
                      <span class=""></span></a>
                        <ul class="dropdown-menu">
                            @if(count((is_countable($categories)?$categories:[]))>0)
                            @foreach ($categories as $category )
                             <li>
                                <a href="#" class=""> {{$category->title}} </a>
                             </li>
                            @endforeach
                            @endif
                        </ul>
                </li>
                @endforeach
            </ul> --}}


           {{-- @foreach ($categories as $category)
             @foreach ($category->categories as $subcategory)
             <a class="list-group-item font-weight-bold list-group-item-action"
                      href="">{{ $subcategory->title }}
             </a>
            @endforeach
          @endforeach
             --}}
            {{-- </ul>
        </div> --}}
        <div class="row mx-auto container">
            <!--products-->
            @if(count((is_countable($products)?$products:[]))>0)
             @foreach ($products as $product)
                {{-- @foreach ($product->categories as $category)      {{ $category ->name }}{{ $loop->last ? '' : ',' }}  @endforeach --}}
                <div class="card" onclick="openproduct()" id="buy-card">

                    @guest
                    <img style="width:24rem; height:15rem;" data-toggle="modal" data-bs-target="#detail-{{ $product->id }}" data-target="#detail-{{ $product->id }}" role="tab" href="#detail-{{ $product->id }}" class="btn " src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">{{$product->price}} DA</p>
                        <!--<a id="detail-btn" data-toggle="modal" data-bs-target="#lovenox" data-target="#lovenox" role="tab" href="#lovenox" class="btn " >Details</a>-->
                        {{-- <form action="{{ route("products.show", $product->id) }}" method="post">
                            @csrf --}}
                           <a id="detail-btn" data-toggle="modal" data-bs-target="#detail-{{ $product->id }}" data-target="#detail-{{ $product->id }}" role="tab" href="#detail-{{ $product->id }}" class="btn " >Details</a>
                        {{-- </form> --}}
                    </div>
                    @endguest

                    @auth
                    @if (auth()->user()->id == $product->user_id)
                    <img style="width:24rem; height:160px" href="" class="btn "  data-toggle="modal" data-bs-target="#detail-{{ $product->id }}" data-target="#detail-{{ $product->id }}" role="tab" href="" class="btn "
                    src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    @else
                    <img style="width:24rem; height:130px" data-toggle="modal" data-bs-target="#detail-{{ $product->id }}"
                    data-target="#detail-{{ $product->id }}" role="tab" href="" class="btn "
                    src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->price }} DA</p>

                            @if (auth()->user()->id == $product->user_id)
                             <div class="btn-container" style="display: flex;">
                              <a id="detail-btn_{{ $product->id }}" data-toggle="modal" data-bs-target="#update-{{ $product->id }}"
                                data-target="#update-{{ $product->id }}" role="tab" href="#update-{{ $product->id }}" class="btn "><i class="fa fa-edit"></i></a>
                              <form id=" {{ $product->id }} "  method="POST" action="{{ route("products.destroy",$product->id) }}">
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
                              <a id="detail-btn_{{ $product->id }}" data-toggle="modal" data-bs-target="#detail-{{ $product->id }}"
                                data-target="#detail-{{ $product->id }}" role="tab" href="" class="btn " style="margin-right:110px">Details</a>
                              @auth
                                <form action="{{ route('add.cart', $product->id) }}" method="post">
                                  @csrf
                                  <input type="hidden" value="{{ $product->id }}" name="id">
                                  <input type="hidden" value="{{ $product->title }}" name="title">
                                  <input type="hidden" value="{{ $product->price }}" name="price">
                                  <input type="hidden" value="{{ $product->image }}"  name="image">
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
             @endforeach
            @endif
        </div>
        <hr>
        <div class="justify-content-center d-flex">
            {{ $products->links() }}
        </div>
    </section>


    {{-- @include('partials.show') --}}
    {{-- @php
        $witem = Cart::instance('wishlist')->content()->pluck('id');
    @endphp --}}
    @foreach ($products as $product)

    <div class="modal fade " id="update-{{ $product->id }}">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
            <div class="modal-content user_card">

                <div class="modal-body">
                    <div class="d-flex justify-content-center h-100">

                            <div class="container h-100">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="">
                                        <div class="d-flex justify-content-center">
                                            <div class="brand_logo_container">
                                                <img src="{{ asset($product->image) }}" class="brand_logo" alt="Logo">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center form_container">
                                            <form style="width: 200px;" method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="input-group mb-2 mt-2">
                                                    <input type="text"
                                                        class="form-control "
                                                        placeholder="Tilte" name="title"
                                                        value="{{ $product->title }}">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input  type="text" class="form-control input_pass"
                                                        placeholder="Description" name="description"
                                                        value="{{ $product->description }}" cols="15" rows="5">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input type="number" placeholder="price"
                                                        class="form-control" name="price" value="{{ $product->price }}">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <input type="number" placeholder="quantity in stock" min="{{ $product->in_stock }}"
                                                        class="form-control" name="qty" value="{{ $product->in_stock }}">
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
                                                                  <option {{ $product->category_id === $subcategory->id ? "selected" : "" }} value="{{ $subcategory->id }}"> {{ $subcategory->title }}</option>
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
    </div>
        <div id="detail-{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
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
                                                src="{{ asset($product->image) }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details col-md-9">
                                        <h2 class="product-title">{{ $product->title }}</h2>
                                        {{-- <span>{{ $product->category->title }}</span> --}}
                                        <p style="width: 300px" class="product-description">{{ $product->description }}</p>
                                        <h4 class="price">current price:<br> <span>{{ $product->price }}
                                                DA</span></h4>
                                        @auth
                                          @if (auth()->user()->id == $product->user_id)
                                             <h4 class="price">My Product<br></h4>
                                          @endif
                                        @endauth
                                        @guest
                                          <h4 class="price">Seller Name:<br></h4>
                                          <h5>{{ $product->user->name }}  <a href="mailto:{{ $product->user->email }}">    Send Email</a></h5>
                                        @endguest
                                        <p class="vote"><strong>91%</strong> of buyers use this product!
                                            <strong>(87 votes)</strong></p>
                                        <p class="font-weight-bold">
                                            @if ($product->in_stock > 0)
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
                                          @if (($product->in_stock >0) && (auth()->user()->id != $product->user_id))
                                          <form action="{{ route('add.cart', $product->id) }}" method="post">
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



                                                <input  type="number" onkeyup="setQty('qty-{{$product->id}}',{{ $product->in_stock}})" style="height: 40px;" type="text" name="qty" id="qty-{{ $product->id }}"
                                                    class="form-control input-number" value="1" min="1"
                                                    max="{{ $product->in_stock }}">

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
                                                <button type="submit" id="add" class="add-to-cart btn " name="product_id" value="{{ $product->id }}"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                                <button type="button" id="like" style="background: none; "class="like ">
                                                    @php
                                                        $countWishlist = 0
                                                    @endphp
                                                    @if(Auth::check(0))
                                                        @php
                                                            $countWishlist = App\Models\Wishlist::countWishlist($product['id'])
                                                        @endphp
                                                    @endif
                                                     <a class="update_wishlist" data-productid="{{ $product->id }}" >
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
        </div>
    @endforeach
@endsection

@push('javascript')

<script>

var user_id = "{{ Auth::id() }}";

    $(document).ready(function(){
        $('.update_wishlist').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });
            var product_id = $(this).data('productid');
            $.ajax({
                type: 'GET',
                url: '/update_wishlist',
                data: {
                    product_id: product_id,
                    user_id: user_id
                },
                success:function(response){
                    if(response.action == 'add'){
                        $('a[data-productid='+ product_id+']').html('<i style="font-size: 30px; margin-left: 30px;" class="fas fa-heart "></i>');

                        $('#notifDiv').fadeIn();
                        $('#notifDiv').css('background', 'green');
                        $('#notifDiv').text(response.message);
                        setTimeout(() => {
                            $('#notifDiv').fadeOut();
                        }, 3000);
                    }else if(response.action == 'remove'){
                        $('a[data-productid='+product_id+']').html('<i style="font-size: 30px; margin-left: 30px;" class="far fa-heart "></i>');
                        $('#notifDiv').fadeIn();
                        $('#notifDiv').css('background', 'red');
                        $('#notifDiv').text(response.message);
                        setTimeout(() => {
                            $('#notifDiv').fadeOut();
                        }, 3000);
                    }
                }
            })
        });
    });
</script>
@endpush

