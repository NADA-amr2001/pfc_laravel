
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

            {{-- <a href=" {{ route("products.create") }} " class="btn  btn-primary my-2"><i class="fa fa-plus"></i></a> --}}

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
                          <td> {{ $product->title }} </td>
                          <td> {{ Str::limit($product->description,50) }} </td>
                          <td> {{ $product->price }} DA</td>
                          <td> {{ $product->total }} DA</td>
                          <td>
                            @if ($product->in_stock > 0)
                             <i class="fa fa-check text-success"></i>
                          @else
                           <i class="fa fa-times text-danger"></i>
                          @endif
                          </td>
                          <td> <img src="{{ $product->image }}" alt="{{ $product->title }}" width="50" height="50" class="img-fluid rounded"> </td>
                          <td> {{ $product->category->title }} </td>
                          <td class="d-flex flex-row justify-content-center align-items-center">
                              <a href="{{ route("products.edit", $product->id) }}" class="btn btn-sm btn-warning mr-2"><i class="fa fa-edit"></i></a>
                            <form id=" {{ $product->id }} "  method="POST" action="{{ route("admin.products.destroy",$product->id) }}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" onclick="return confirm('are you sure you want to delete this product ?')"
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
                {{ $products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
