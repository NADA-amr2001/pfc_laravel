@extends('layouts.app')

@section('content')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                <h4>My Profile Page</h4>
                <hr>

                <form   method="POST" action="/Profile/{{Auth::user()->id}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                <div class="col-md-4">
                        <img  src="{{ url(Auth::user()->image ??'/uploads/profile/user.png') }}" class="w-75" alt=" ">
                        <br>
                        <input type="file" name="image" class="form-cotrol">
                </div>

                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Name </label>

                                        <input id="name" type="text"
                                                    class="form-control input_pass input_user @error('name') is-invalid @enderror"
                                                    value="{{ Auth::user()->name}}"   name="name"
                                                    autocomplete="name" autofocus>


                                        </div>
                      </div>

        <div class="col-md-6">
                          <div class="form-group">
                              <label for="">Adress </label>
                                        <input type="text" class="form-control" id="adress" name="adress"  value="{{ Auth::user()->adress}}">

</div>

        </div>
        {{-- <div class="col-md-4">
                          <div class="form-group">
                              <label for="">City </label>
                                        <input type="text" class="form-control" name="city"  value="{{ Auth::user()->city}}"    >
                                        </div>
                      </div> --}}
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Phone number</label>
                                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone}}"    >
                                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Email </label>
                                        <input type="text" class="form-control" readonly value="{{ Auth::user()->email}}"    >

</div>

        </div>
        <div class="col-md-4">
                          <div class="form-group">
                              <label for=""> Your Profile Updation </label>

                            <button  type="submit" class="btn btn-primary" >   Update Profile       </button>

</div>

        </div>

</form>
</section>
@endsection
