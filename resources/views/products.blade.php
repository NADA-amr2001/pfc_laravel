
@extends('layouts.app')
@section('content')

 <section id="medicines" style="margin-top:30px">
    <div class="row mx-auto container">
       <!--products-->
     @foreach ($products as $product)
     {{-- @foreach ( $product->categories as $category   )      {{ $category ->name }}{{ $loop->last ? '' : ',' }}  @endforeach --}}
      <div class="card"  onclick="openproduct()" id="buy-card">
          <img style="width:24rem; height:130px" data-toggle="modal" data-bs-target="#detail" data-target="#detail" role="tab" href="" class="btn " src="{{$product->image}}" class="card-img-top" alt="{{$product->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->price}} DA</p>
            <!--<a id="detail-btn" data-toggle="modal" data-bs-target="#lovenox" data-target="#lovenox" role="tab" href="#lovenox" class="btn " >Details</a>-->
            <form action="{{ route("products.show", $product->id) }}" method="post">
                @csrf
               <a id="detail-btn" data-toggle="modal" data-bs-target="#detail" data-target="#detail" role="tab" href="" class="btn " >Details</a>
            </form>
        </div>
      </div>
     @endforeach
    </div>
    <hr>
    <div class="justify-content-center d-flex">
        {{ $products->links()}}
    </div>
  </section>
  @include('partials.show')

@endsection




