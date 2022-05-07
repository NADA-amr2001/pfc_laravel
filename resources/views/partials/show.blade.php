<form action="{{ route('products.show') }}" class="d-flex mr-3">
<div id="detail" class="modal fade" tabindex="-1" role="dialog" style="display: none;" >
    <div class="modal-dialog modal-dialog-centered modal-lg "  role="document">
        <div class="modal-content card " style="height: 100%; width: 100%" id="details" >
            <button id="closemodal"  data-dismiss="modal" class="w3-button w3-display-topright" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: none; color: #666666; font-size: 30px; border: none; margin-top: 10px;"><i style=" margin-left: 720px;" class="bi bi-x-lg"></i></button>
          <div class="modal-body" >
            <div class="card" id="d-card">
                <div class="container">
                  <div class="wrapper row">
                    <div class="preview col-md-4">
                      <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img id="d-img" src="{{ $product->image }}" /></div>
                      </div>
                    </div>
                    <div class="details col-md-6">
                      <h2 class="product-title">{{ $product->title }}</h2>
                      <span>{{ $product->category->title }}</span>
                      <p class="product-description">{{ $product->description }}</p>
                      <h4 class="price">current price:<br> <span>{{ $product->price}} DA</span></h4>
                      <h4 class="price">old price:<br><strike> <span>{{ $product->old_price}} DA </strike></span></h4>
                      <p class="vote"><strong>91%</strong> of buyers use this product! <strong>(87 votes)</strong></p>
                      <p class="font-weight-bold">
                         @if($product->in_stock > 0)
                             <span class="text-success">
                                 Available
                             </span>
                         @else
                             <span class="text-danger">
                                   Unavailable
                             </span>
                         @endif
                     </p>
                     <form action="{{ route("add.cart", $product->id) }}" method="post">
                        @csrf
                      <p><strong> Quantity:</strong></p>
                      <div style="width: 150px; height: 40px;" class="input-group">
                        <span class="input-group-btn">
                            <button id="qnt-btnm" type="button" class="btn-number" disabled="disabled" data-type="minus" data-field="qty">
                                <span class="glyphicon glyphicon-minus"><i class="bi bi-dash-lg"></i></span>
                            </button>
                        </span>
                        <input style="height: 40px;" type="text" name="qty" id="qty" class="form-control input-number" value="1" min="1" max="{{ $product->in_stock}}">
                        <span class="input-group-btn">
                            <button id="qnt-btnp" type="button" class="  btn-number" data-type="plus"  data-field="qty">
                                <span class="glyphicon glyphicon-plus"><i class="bi bi-plus"></i></span>
                            </button>
                        </span>
                      </div>


                      <div>
                        <button type="submit" id="add" class="add-to-cart " style="width: 150px;" ><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        <button type="button" id="like" style="background: none; " class="like "><span style="font-size: 30px; margin-left: 30px;" class="fa fa-heart"></span></button>
                      </div>
                     </form>
                    </div>
                  </div>
            </div>

          </div>
        </div>
    </div>
</div>
</form>
