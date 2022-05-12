@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center h-100">
    <div class="">
        <div class="d-flex justify-content-center" style="margin-bottom: 30px">
            <div class="col-md-4">
                @include("layouts.sidebar")
            </div>
            <div class="col-md-8">

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
                            <form style="width: 200px;" method="POST" action="{{ route("products.store")}}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-2 mt-2">
                                    <input id="title" type="text"
                                        class="form-control input_pass input_user @error('title') is-invalid @enderror"
                                        placeholder="Tilte" name="title"
                                        value="{{ old('title') }}" required autocomplete="title"
                                        autofocus>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-2">
                                    <input id="desc" type="text" class="form-control input_pass"
                                        placeholder="Description" name="description"
                                        value="{{ old('description') }}" required
                                        autocomplete="description">
                                </div>
                                <div class="input-group mb-2">
                                    <input id="price" type="number" placeholder="price"
                                        class="form-control" name="price" required
                                        autocomplete="price">
                                </div>
                                <div class="input-group mb-2">
                                    <input id="qty" type="number" placeholder="qty"
                                        class="form-control" name="qty" required
                                        autocomplete="number">
                                </div>
                                <div class="input-group mb-2">
                                    <input id="image" type="file" class="form-control"
                                        name="image" required>
                                </div>

                                <div class="input-group mb-2">
                                    <select required class="form-select" name="category_id"
                                        aria-label="Default select example">
                                        <option disabled selected>Select the category</option>
                                        @php
                                            $categories = App\Models\Category::all();
                                        @endphp
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->title }}</option>
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
