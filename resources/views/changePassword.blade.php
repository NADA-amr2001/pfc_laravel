@extends('layouts.app')

@section('content')

    <div class="container mt-5 " style="margin-bottom: 150px">
        <div class="row">
            <div class="col-md-12">
                <div class=" card" style="border: none;">
                    <div class="card-header">
                        <h4> Change Password</h4>
                    </div>
                    <div class="card-body">
                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        <form action="{{route('changePassword')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="main-card mb-3  card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mt-3">
                                                        <label for="current_password">Old password</label>
                                                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                                                            placeholder="Enter current password">
                                                        @error('current_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>

                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mt-3">
                                                        <label for="new_password ">new password</label>
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                                                            placeholder="Enter the new password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>

                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mt-3">
                                                        <label for="confirm_password">confirm password</label>
                                                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="Enter same password">
                                                        @error('confirm_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>

                                                        @enderror
                                                    </div>
                                                </div>
                                                <div  class="d-flex justify-content-first mt-4 ">
                                                    <button type="submit" class="btn btn-primary "
                                                        id="formSubmit">change password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
