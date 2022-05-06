
@extends('layouts.app')
@section('content')

 <section id="medicines" style="margin-top:120px">
    <div class="row mx-auto container">
       <!--lovenox-->
      @foreach ($products as $product)
      <div class="card"  onclick="openproduct()" id="buy-card">
          <img style="width:24rem; height:120px" id="detail-btn" data-toggle="modal" data-bs-target="#lovenox" data-target="#lovenox" role="tab" href="#lovenox" src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->price}} DA</p>
            <!--<a id="detail-btn" data-toggle="modal" data-bs-target="#lovenox" data-target="#lovenox" role="tab" href="#lovenox" class="btn " >Details</a>-->
            <a id="detail-btn" data-toggle="modal" data-bs-target="#detail" data-target="#detail" role="tab" href="" class="btn " >Details</a>
        </div>
      </div>
     @endforeach
    </div>
  </section>

            <div id="detail" class="modal fade" tabindex="-1" role="dialog" style="display: none;" >
              <div class="modal-dialog modal-dialog-centered"  role="document">
                <div class="modal-content" style="height: 100%;" id="details" >
                    <button id="closemodal"  data-dismiss="modal" class="w3-button w3-display-topright" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; color: #666666; font-size: 20px; border: none; margin-top: 5px;"><i style=" margin-left: 720px;" class="bi bi-x-lg"></i></button>
                  <div class="modal-body" style="max-width: 1000px!important; " >
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
@endsection



<
