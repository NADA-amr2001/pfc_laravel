admin
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <a href="{{ route("admin.products") }}" style="text-decoration:none"></a>
                <div class="card bg-danger text-white">
                    <div class="card-body d-flex flex-cilumn justify-content-center align-items-center">
                     <h3>Products :  </h3><br>
                     <span class="font-weight-bold">
                         {{ $products->count() }}
                     </span>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <a href="{{ route("admin.orders") }}" style="text-decoration:none"></a>
                <div class="card bg-danger text-white">
                   <div class="card-body d-flex flex-cilumn justify-content-center align-items-center">
                    <h3>Orders :  </h3><br>
                    <span class="font-weight-bold">
                        {{ $orders->count() }}
                    </span>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
