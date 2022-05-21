@extends('layouts.app')

@section('content')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             <div class="card" style="border: none">
               <div class="card-body">

                <h4 style="align-content: center; justify-content:center;">My Profile Page</h4>
                <hr>

                <form    method="POST" action="/Profile/{{Auth::user()->id}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

               <div class="col-md-4">
                        <img  src="{{ url(Auth::user()->image ??'/uploads/profile/user.png') }}" class="w-75" alt=" ">
                        <br>
                        <br>
                        <input type="file" name="image" class="form-cotrol">
                </div>
                <div class="col-md-8">
                        <div class="col-md-8">
                          <div class="form-group">
                              <label for="">Name </label>
                                    <input id="name" type="text"  class="form-control input_pass input_user @error('name') is-invalid @enderror"
                                                    value="{{ Auth::user()->name}}"   name="name"
                                                    autocomplete="name" autofocus>
                            </div>
                        </div>

                       <div class="col-md-8">
                          <div class="form-group">
                              <label for="">Adress </label>
                                        <input type="text" class="form-control" id="adress" name="adress"  value="{{ Auth::user()->adress}}">

                           </div>
                       </div>
                       <div class="col-md-8">
                          <div class="form-group">
                              <label for="">Phone number</label>
                                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone}}"    >
                                        </div>
                       </div>
                       <div class="col-md-8">
                          <div class="form-group">
                              <label for="">Email </label>
                                        <input type="text" class="form-control" readonly value="{{ Auth::user()->email}}"    >

                            </div>
                       </div>

                     <div class="col-md-5">
                        <div class="form-group">
                            <button style="margin-right: 100px"  type="submit" class="btn btn-primary" >   Update Profile   </button>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="form-group">
                            <a  type="submit" class="btn btn-primary" href="/changePassword">   Change Password  </a>
                        </div>
                     </div>

                </div>

            </form>



</section>
{{-- <div class="modal fade " id="change-password{{ Auth::user()->id }}">
    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
        <div class="modal-content user_card">

            <div class="modal-body">
                <div class="d-flex justify-content-center h-100">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h6> Change Password</h6>
                                    </div>
                                    <div class="card-body">
                                        @if (count($errors))
                                            @foreach ($errors->all() as $error)
                                                <p class="alert alert-danger">{{$error}}</p>
                                            @endforeach
                                        @endif
                                        {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"     action="{{ route('settings.update',[$users->id,$users->slug]) }}"         method="post">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label>Old Password :</label>
                                                <input type="password" id="first-name" class="form-control"  placeholder="Enter old password" name="oldpassword">
                                            </div>
                                            <div class="form-group">
                                                <label> New Password :</label>
                                                <input type="password" id="first-name" placeholder="Enter new password" class="form-control" name="newpassword">
                                            </div>
                                            <div class="form-group">
                                                <label> Confirm Password :</label>
                                                <input type="password" id="first-name"  class="form-control"placeholder="Enter password confirmation"  name="password_confirmation">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div> --}}

@endsection
