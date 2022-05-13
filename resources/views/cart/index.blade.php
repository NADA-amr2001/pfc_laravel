@extends('layouts.app')
@section('content')


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
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-warning " ><i class="fa fa-edit"></i></button>
                                    </div>
                                 </form>

                                @else
                                 Not avalable!
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
                                <a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                            </td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>{{ $total}} DA</strong></td>
							<td>
                                @if (count($items) == 0)
                                <td><a href="#" class="btn btn-success btn-block">NO checkout <i class="fa fa-angle-right"></i></a></td>
                                @else
                                <td><form method="POST" action="/createOrders">@csrf <button type="submit" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></button></form></td>
                                @endif
                            </td>
						</tr>
					</tfoot>
				</table>

                {{-- @if (Cart::getSubtotal() > 0 )
                <div class="form-group">
                    <a href="{{ route("make.payment")  }}" class="btn btn-primary mt-3">
                       Payer {{ Cart::getSubtotal()  }} DA via paypal
                    </a>
                </div>

                @endif --}}
                <form action="{{route('index.paypal')}}" method="post" >
                    @csrf
                  <div class="row">
                      <button type="submit" class="btn btn-success">payment</button>
                  </div>
                </form>

</div>

@endsection
