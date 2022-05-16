
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<!DOCTYPE html>

<html lang="en">


    <head>


		<title>Admin</title>

		<!-- Force IE to turn off past version compatibility mode and use current version mode -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">

		<!-- Get the width of the users display-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Text encoded as UTF-8 -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- icons -->
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

		<!-- bootstrap -->
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="default">

		<!-- theme -->
		<link href="https://netdna.bootstrapcdn.com/bootswatch/3.1.0/bootstrap/bootstrap.min.css" rel="stylesheet" title="theme">


    	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries in IE8, IE9 -->
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
		<![endif]-->
        <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css') }}">
        <style>
            .label,.glyphicon { margin-right:5px; }
            .btn{
                background: #60a3bc;
             transform: translateY(20px);
              border: none;
             border-bottom: 3px solid #fff;
             border-color: #666666;
             color: white;
             transition: 0.3s all;
            }

        </style>

	</head>

  <body>



    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <img id="navlogo" href="{{ url('/') }}" src="/image/logo@2x.png" alt="logo">
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="https://mailtrap.io/inboxes/1719650/messages" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-envelope"></span>Inbox </a>
                </li>
                <li class="dropdown"><a href="{{ route('admin.index') }}" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="fa fa-archive"></span>Dashboard </a>
                </li>
                <li class="dropdown"><a  onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"
                    href="{{ route('admin.logout') }}" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="fa fa-sign-out"></span>Logout </a>
                    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
      </div>
    </nav>

<div class="container" style="margin-top:150px">
    <div class="d-flex justify-content-center h-100">
        <div class="">
            <div class="d-flex justify-content-center" style="margin-bottom: 30px">
                <div class="col-md-5">
                    @include("layouts.sidebar")
                </div>
                <div class="col-md-7">

                            <div class="container h-100">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="">
                                        <div class="d-flex justify-content-center">
                                            <div class="brand_logo_container">
                                                <img src="\image\mrare.png" class="brand_logo" alt="Logo">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center form_container">
                                            <form style="width: 200px;" method="POST" action="{{ route('admin.products.add_catg') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-2 mt-2">
                                                    <input id="title" type="text"
                                                        class="form-control input_pass input_user @error('title') is-invalid @enderror"
                                                        placeholder="Tilte" name="title" value="{{ old('title') }}"
                                                        required autocomplete="title" autofocus>
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 login_container">
                                                    <button type="submit" name="button"
                                                        class="btn login_btn">{{ __('Add Category') }}</button>
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
</div>

  </body>
</html>





