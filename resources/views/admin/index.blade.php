
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <br>
        <br>
        <div class="col-md-4">
            <div class="card">

                <div class="card bg-danger text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                     <a href="{{ route("admin.products") }}" style="text-decoration:none; font-size: 22px; color:antiquewhite">Products :</a>
                     <br>
                     <span class="font-weight-bold" style="font-size: 18px">
                         {{ $products->count() }}
                     </span>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card bg-danger text-white">
                   <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ route("admin.orders") }}" style="text-decoration:none; font-size: 22px; color:antiquewhite">Orders :</a>
                    <br>
                    <span class="font-weight-bold" style="font-size: 18px">
                        {{ $orders->count() }}
                    </span>
                   </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
@endsection
