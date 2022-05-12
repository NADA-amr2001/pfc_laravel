
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
             @include('layouts.sidebar')
        </div>
        <div class="col-md-8">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Disponible</th>
                        <th>image</th>
                        <th>Category</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($products as $product )
                      <tr>
                          <td> {{ $product->id }} </td>
                          <td> {{ $product->user->title }} </td>
                          <td> {{ Str::limit($product->description,50) }} </td>
                          <td> {{ $product->price }} DA</td>
                          <td> {{ $product->total }} DA</td>
                          <td>
                            @if ($product->in_stock > 0)
                            <i class="fa fa-chack text-success"></i>
                          @else
                           <i class="fa fa-times text-danger"></i>
                          @endif
                          </td>
                          <td> <img src="{{ $product->image }}" alt="{{ $product->title }}" width="50" height="50" class="img-fluid rounded"> </td>
                          <td> {{ $product->category->title }} </td>
                          <td>
                            <form id=" {{ $product->id }} "  method="POST" action="{{ route("products.destroy",$product->id) }}">
                                @csrf
                                @method("DELETE")
                                <button onclick="event.preventDefault();
                                                  if(confirm('Do you really want to delete the product ! {{ $product->title }} ?'))
                                                        document.getElementById({{ $product->id }}).submit"
                                        class="btn btn-sm btn-success">
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
                {{ $products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
