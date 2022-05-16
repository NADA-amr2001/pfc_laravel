@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center h-100">
    <div class="">
      <div class="d-flex justify-content-center" style="margin-bottom: 30px">
        <div class="brand_logo_container">
          <img src="image/mrare.png" class="brand_logo" alt="Logo">
        </div>
      </div>
      <div class="d-flex justify-content-center form_container">
       <form method="POST" action="{{ route('admin.login') }}">
         @csrf
         <div class="input-group mb-3">
           <div class="input-group-append">
             <span class="input-group-text"><i class="fas fa-user"></i></span>

           <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
           @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
           @enderror

         </div>
         <div class="input-group mb-2">
           <div class="input-group-append">
             <span class="input-group-text"><i class="fas fa-key"></i></span>

           <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
         </div>
            @error('password')
              <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
              </span>
            @enderror

         </div>
         {{-- <div class="form-group">
           <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>
             <label class="custom-control-label" for="remember">
               {{ __('Stay connected') }}
            </label>
           </div>
         </div> --}}
         <div class="d-flex justify-content-center mt-3 login_container">
           <button type="submit" name="button" class="btn login_btn">connexion</button>
         </div>
         {{-- <div class="mt-4">
           <div class="d-flex justify-content-center links">
             {{-- Don't have an account? <a style="color: #fff;" id="signup-link" data-dismiss="modal" id="signup-link" href="#signup" data-toggle="modal" data-target="#signup" role="tab" data-bs-target="#signup" data-bs-toggle="modal" class="ml-2">Sign Up</a>
           </div>

         </div> --}}
       </form>
      </div>
    </div>
  </div>

@endsection
