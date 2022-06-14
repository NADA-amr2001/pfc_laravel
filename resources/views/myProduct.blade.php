@extends('layouts.app')
@section('content')
    <section id="medicines" style="margin-top:30px">
        <div class="col-md-1">
            <a id="add-btn" data-toggle="modal"
            data-target="#add" data-bs-target="#add" role="tab" href="#add"class="btn "><i class="fa fa-plus"></i></a>
        </div>

        <div class="row mx-auto container">
            <!--products-->
             @foreach ($products as $product)
                {{-- @foreach ($product->categories as $category)      {{ $category ->name }}{{ $loop->last ? '' : ',' }}  @endforeach --}}
                <div class="card" onclick="openproduct()" id="buy-card">
                    @if (auth()->user()->id == $product->user_id)
                    <img style="width:24rem; height:130px" href="" class="btn "  data-toggle="modal" data-bs-target="#detail-{{ $product->id }}" data-target="#detail-{{ $product->id }}" role="tab" href="" class="btn "
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
                              <a id="detail-btn_{{ $product->id }}" data-toggle="modal" data-bs-target="#detail-{{ $product->id }}"
                                data-target="#detail-{{ $product->id }}" role="tab" href="" class="btn ">Details</a>
                           @endif

                    </div>
                 </div>
             @endforeach
        </div>
        <hr>

    </section>

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
                                                    <input type="number" placeholder="quantity in stock"
                                                        class="form-control" name="qty" value="{{ $product->in_stock }}">
                                                </div>

                                                <div class="input-group mb-2">
                                                    <input id="image" type="file" class="form-control" name="image">
                                                </div>

                                                <div class="input-group mb-2">
                                                    <select required class="form-select" name="category_id"
                                                        aria-label="Default select example" style="width: 200px; height:35px;">
                                                        <option disabled selected>Select the category</option>
                                                        @php
                                                            $categories = App\Models\Category::all();
                                                        @endphp
                                                        @foreach ($categories as $category)
                                                           <option {{ $product->category_id === $category->id ? "selected" : "" }} value="{{ $category->id }}" >{{ $category->title }}</option>
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

    {{-- @include('partials.show') --}}
    @foreach ($products as $product)

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
                                    <div class="preview col-md-4">
                                        <div class="preview-pic tab-content">
                                            <div class="tab-pane active" id="pic-1"><img id="d-img"
                                                    src="{{ asset($product->image) }}" /></div>
                                        </div>
                                    </div>
                                    <div class="details col-md-8">

                                        <h2  class="product-title">{{ $product->title }}</h2>
                                        {{-- <span>{{ $product->category->title }}</span> --}}
                                        <p class="product-description">{{ $product->description }}</p>
                                        <h4 class="price">current price:<br> <span>{{ $product->price }}
                                                DA</span></h4>
                                        @if (auth()->user()->id == $product->user_id)
                                          <h4 class="price">My Product:<br></h4>
                                        @else
                                          <h4 class="price">Seller Name:<br></h4>
                                          <h5>{{ $product->user->name }}  <a href="mailto:{{ $product->user->email }}">    Send Email</a></h5>
                                        @endif
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
                                                <button type="submit" id="add" class="add-to-cart btn "
                                                   ><i class="fa fa-shopping-cart"></i> Add To
                                                    Cart</button>
                                                <button type="button" id="like" style="background: none; "
                                                    class="like "><span style="font-size: 30px; margin-left: 30px;"
                                                        class="fa fa-heart"></span></button>

                                                      {{-- <form  action="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                        <button type="submit" class="add-to-cart btn "
                                                           ><i class="fa fa-shopping-delete"></i> Delete product</button>

                                                       </form> --}}


                                                @endauth
                                                @guest
                                                <a id="add" class="add-to-cart btn"  data-toggle="modal"
                                                data-target="#login" data-bs-target="#login"
                                                   ><i class="fa fa-shopping-cart"></i>Login to Add To
                                                    Cart</a>
                                                @endguest
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
@endsection

