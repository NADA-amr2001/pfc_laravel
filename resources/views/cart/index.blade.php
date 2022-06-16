@extends('layouts.app')
@section('content')

@if( \Cart::getContent()->count() > 0)
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                      @foreach ($items as $item)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-5 hidden-xs"><img src="{{ $item->associatedModel->image }}" alt="{{ $item->title}}" class="img-responsive img-fluid rounded"/></div>
									<div class="col-sm-7">
										<h4 class="nomargin">{{ $item->title}}</h4>
									</div>
								</div>
							</td>
							<td data-th="Price"> {{ $item->price}} DA</td>
							<td data-th="Quantity">
                                @if ($item->associatedModel->in_stock>0)
                                <form action="{{ route("update.cart", $item->associatedModel->id) }}" method="post" class="d-flex flex-row justify-content-center align-items-center" >
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input type="number" onkeyup="setQty('qty-{{$item->id}}',{{ $item->associatedModel->in_stock}})" style="width: 80px" name="qty" id="qty-{{$item->id}}" value="{{$item->quantity }}" max="{{ $item->associatedModel->in_stock}}" min="1" class="form-control">
                                     {{-- @if(qty-{{$item->id}} == {{ $item->associatedModel->in_stock}})
                                      <div class="alert alert-errorLink alert-dismissible fade show" >
                                        <strong>{!! session()->get("danger") !!}</strong>
                                        <button type="button " class="close">
                                            <span>&times;</span>
                                        </button>
                                      </div>
                                     @endif --}}
                                    </div>

                                    {{-- <script>

                                     function setQty(qty-{{$item->id}} , {{ $item->associatedModel->in_stock}}){
                                                    // if(qty-{{$item->id}} > {{ $item->associatedModel->in_stock}}){
                                                        alert("hiiiiiiiiiiiiiii");
                                                      // }
                                                    }</script> --}}
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm " style="background: #996699; color:white;" ><i class="fa fa-edit"></i></button>
                                    </div>
                                 </form>

                                @else
                                 Not available!
                                @endif
							</td>
							<td data-th="Subtotal" class="text-center">{{ $item->associatedModel->price * $item->quantity}} DA</td>
							<td class="actions" data-th="">
                                <form action="{{ route("remove.cart", $item->associatedModel->id) }}" method="post" class="d-flex flex-row justify-content-center align-items-center" >
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                 </form>
							</td>
						</tr>
                       @endforeach
					</tbody>
					<tfoot>
						{{-- <tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr> --}}
						<tr>
							<td>
                                @if (Cart::getSubtotal() > 0 )
                                   <div class="form-group">
                                     <a href="{{ route("make.payment")  }}" class="btn " style="background:#996699; color:white"><i class="fa fa-angle-left"></i>
                                             Payer {{ Cart::getSubtotal()  }} DA via paypal
                                     </a>
                                   </div>
                                @endif
                            </td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>{{ $total}} DA</strong></td>
							<td>
                                @if (count($items) == 0)
                                <td><a href="#" class="btn btn-success btn-block">NO checkout <i class="fa fa-angle-right"></i></a></td>
                                @else
                                {{-- <td><form method="POST" action="/createOrders">@csrf <button type="submit" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></button></form></td> --}}
                                <td> <button style="color: white; background:#3399cc;" type="submit" class="btn btn-block" data-toggle="modal" data-target="#checkout" data-bs-target="#checkout" role="tab" href="#checkout">Checkout <i class="fa fa-angle-right"></i></button></td>
                                @endif
                            </td>
						</tr>
					</tfoot>
				</table>

                {{-- <form action="{{route('index.paypal')}}" method="post" >
                    @csrf
                  <div class="row">
                      <button type="submit" class="btn btn-success">payment</button>
                  </div>
                </form> --}}

</div>
@else
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
                          <div class="col-md-12" >
                             <p style="font-size: 32px; align-item:center; margin-left:35%">Your Cart is empty.</p>
                               <img src="/public/image/emptycart" alt="">
                          </div>
                        </tr>
                    </thead>
    </table>
</div>
@endif

<div class="modal fade " id="checkout">
    <div class="modal-dialog modal-dialog-xl modal-dialog-centered">
        <div class="modal-content ">

            <div class="modal-body">

                <div class=" text-center mt-5 ">
                    <h1 style=" margin-bottom: 40px; color:#3399cc">Check Out</h1>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row ">
                    <div class="col-lg-12 mx-auto">
                        <div class="card mt-2 mx-auto p-1 bg-light">
                            <div id="card_l" class="card-body bg-light">
                                <div class="container" style="width: 440px">
                                    <form id="checkout-form" role="form" method="post"  action="/createOrders">
                                        {{ csrf_field() }}
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="cont_l" for="form_fname">Firstname</label>
                                                        <input id="form_fname" type="text"
                                                            class="form-control @error('fname') is-invalid @enderror"
                                                            type="text" name="fname"
                                                            placeholder="Please enter your firstname "
                                                            required="required" data-error="Firstname is required.">
                                                        @error('fname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="cont_l" for="form_lname">Lastname</label>
                                                        <input id="form_lname" type="text"
                                                            class="form-control @error('lname') is-invalid @enderror"
                                                            type="text" name="lname"
                                                            placeholder="Please enter your last name "
                                                            required="required"
                                                            data-error="Last tname is required.">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="cont_l" for="form_email">Email </label>
                                                        <input type="text"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="form_email" type="email" name="email"
                                                            placeholder="Please enter your email "
                                                            required="required"
                                                            data-error="Valid email is required.">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="cont_l" for="form_phone">Phone </label>
                                                        <input type="text"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            name="phone" id="form_phone"
                                                            placeholder="Please enter your phone "
                                                            required="required"
                                                            data-error="Valid phone is required.">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label id="cont_l" for="form_phone">Adress </label>
                                                        <input type="text"
                                                            class="form-control @error('adress') is-invalid @enderror"
                                                            name="adress" id="form_adress"
                                                            placeholder="Please enter your adress "
                                                            required="required"
                                                            data-error="Valid adress is required.">
                                                        @error('adress')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {{-- <form method="POST" action="/createOrders">
                                                        @csrf --}}
                                                        <button type="submit" class="btn btn-send  pt-2 btn-block" style="margin-left:100px">Check Out </button>
                                                    {{-- </form> --}}
                                                </div>
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
    </div>
</div>

@endsection
