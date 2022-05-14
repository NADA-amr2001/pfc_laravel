
@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('delete'))
        <p style="width: 200px; align-item: center; justify-content: center; margin-left: 450px" class="alert alert-danger">{{ Session::get('delete') }}</p>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-2">
             @include('layouts.sidebar')
        </div>
        <div class="col-md-10">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>customer</th>
                        <th>Product</th>
                        <th>Total</th>
                        <th>paid</th>
                        <th>Livery</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($orders as $order )
                      <tr>
                          <td> {{ $order->id }} </td>
                          <td> {{ $order->user->name }} </td>
                          <td> {{ $order->product_name }} </td>
                          <td> {{ $order->total }} DA </td>
                          <td>
                             @if ($order->paid)
                                 <i class="fa fa-chack text-success"></i>
                             @else
                                <i class="fa fa-times text-danger"></i>
                             @endif
                          </td>
                          <td>
                             @if ($order->delivered)
                               <i class="fa fa-check text-success"></i>
                             @else
                              <i class="fa fa-times text-danger"></i>
                             @endif
                          </td>
                          <td class="d-flex flex-row justify-content-center align-items-center">
                              <form method="POST" action="{{ route("orders.update",$order->id) }}">
                                @csrf
                                @method("PUT")
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="fa fa-check"></i>
                                </button>
                              </form>
                          </td>
                          <td>
                              <form id=" {{ $order->id }} "  method="POST" action="{{ route("orders.destroy",$order->id) }}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" onclick="return confirm('are you sure you want to delete this order ?')"
                                        class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                              </form>
                          </td>
                      </tr>

                   @endforeach
                </tbody>
            </table>
            <hr>
            <div class="justify-content-center d-flex">
                {{ $orders->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
