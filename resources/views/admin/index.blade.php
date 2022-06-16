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
            .card-body{
                background: #3399cc;
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
            <img id="navlogo" href="{{ url('/') }}" src="/image/logo1@2x.png" alt="logo">
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


    <div class="container" style="margin-top: 300px;">

        <div class="row justify-content-center" >
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <a href=" {{ route("admin.products")}} " class="btn" role="button" style=" text-decoration: none; color:#fff; font-size: 24px; width:350px; height:125px; margin-top:10px; align:center">

                             <span  class="" > <i class="fa fa-list"></i> Products <br> <br>
                                                     {{ $products->count() }}</p>
                              </span>
                           </a>
                       </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <a href=" {{ route("admin.orders")}} " class="btn" role="button" style=" text-decoration: none; color:#fff; font-size: 24px; width:350px; height:125px; margin-top:10px; align:center">

                             <span  class="" > <i class="fa fa-list"></i> Orders <br> <br>
                                {{ $orders->count() }}</p>
                              </span>
                           </a>
                       </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                          <a href=" {{ route("admin.users")}} " class="btn" role="button" style=" text-decoration: none; color:#fff; font-size: 24px; width:350px; height:125px; margin-top:10px; align:center">

                             <span  class="" > <i class="fa fa-list"></i> Users <br> <br>
                                {{ $users->count() }}</p>
                              </span>
                           </a>
                       </div>
                </div>
            </div>


        </div>
    </div>

  </body>
</html>






{{-- @extends('layouts.app')

@section('content')

@endsection --}}
