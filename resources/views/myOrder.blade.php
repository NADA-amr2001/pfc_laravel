@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 150px">
    @if(Session::has('delete'))
        <p style="width: 200px; align-item: center; justify-content: center; margin-left: 450px" class="alert alert-danger">{{ Session::get('delete') }}</p>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Products</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   {{-- @foreach ($item as $item ) --}}
                      {{-- <tr>
                          <td> {{ Auth::user()->order->id }} </td>
                          <td> {{ Auth::user()->order->product_name }} </td>
                          <td> {{ Auth::user()->order->total }} </td>
                          </td>

                          {{-- <td>
                              <form id=" {{ $order->id }} "  method="POST" action="{{ route("orders.destroy",$order->id) }}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" onclick="return confirm('are you sure you want to delete this order ?')"
                                        class="btn btn-lg btn-danger">
                                        <i class="bi bi-trash3"></i>
                                </button>
                              </form>
                          </td>
                      </tr> --}}

                   {{-- @endforeach --}}
                </tbody>
            </table>
            <hr>
            <div class="justify-content-center d-flex">
                {{-- {{ $orders->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection
