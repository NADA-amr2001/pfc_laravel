@extends('layouts.app')
@section('content')

 <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="/image/mrare.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form style="width: 200px;" method="POST" action="">
          @csrf
            <div class="input-group mb-2 mt-2" >
                <input  id="name" type="text" class="form-control input_pass input_user @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('title') }}" required autocomplete="title" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
            <div class="input-group mb-2">
              <input id="desc" type="text" class="form-control input_pass" placeholder="Description" name="description" value="{{ old('description') }}" required autocomplete="description">
            </div>
            <div class="input-group mb-2">
              <input id="price" type="number" placeholder="price" class="form-control" name="price" required autocomplete="price">
            </div>
            <div class="input-group mb-2">
              <input id="number" type="number" placeholder="number" class="form-control" name="number" required autocomplete="number">
            </div>

            <div class="input-group mb-2">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select the category</option>
                  <option value="1">Medicines</option>
                  <option value="2">Food</option>
                  <option value="3">Equipements</option>
                </select>
            </div>

              <div class="d-flex justify-content-center mt-3 login_container">
           <button type="submit" name="button" class="btn login_btn">{{ __('Add Product') }}</button>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
