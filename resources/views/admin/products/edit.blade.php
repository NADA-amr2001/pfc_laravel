
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center h-100">
    <div class="">
        <div class="d-flex justify-content-center" style="margin-bottom: 30px">
            <div class="col-md-2">
                @include("layouts.sidebar")
            </div>
            <div class="col-md-10">

                <div class="brand_logo_container">
                    <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                </div>

             <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form style="width: 200px;" method="POST" action="{{ route("admin.products.update",$product->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="input-group mb-2 mt-2">
                                    <input type="text"
                                        class="form-control "
                                        placeholder="Tilte" name="title"
                                        value="{{ $product->title }}">
                                </div>
                                <div class="input-group mb-2">
                                    <input  type="text" class="form-control input_pass"
                                        placeholder="Description" name="description"
                                        value="{{ $product->description }}" cols="15" rows="5">
                                </div>
                                <div class="input-group mb-2">
                                    <input type="number" placeholder="price"
                                        class="form-control" name="price" value="{{ $product->price }}">
                                </div>
                                <div class="input-group mb-2">
                                    <input type="number" placeholder="quantity in stock"
                                        class="form-control" name="qty" value="{{ $product->in_stock }}">
                                </div>
                                <div class="input-group mb-2">
                                    <img src="{{ asset($product->image) }}" width="100" height="100" alt="{{ $product->title }}" type="file"name="image">
                                </div>

                                <div class="input-group mb-2">
                                    <select required class="form-select" name="category_id"
                                        aria-label="Default select example">
                                        <option disabled selected>Select the category</option>
                                        @php
                                            $categories = App\Models\Category::all();
                                        @endphp
                                        @foreach ($categories as $category)
                                           <option {{ $product->category_id === $category->id ? "selected" : "" }} value="{{ $category->id }}" >{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button"
                                        class="btn login_btn">{{ __('Add Product') }}</button>
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
@endsection
