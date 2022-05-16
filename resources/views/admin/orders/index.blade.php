
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

		<!-- theme -->
		<link href="https://netdna.bootstrapcdn.com/bootswatch/3.1.0/bootstrap/bootstrap.min.css" rel="stylesheet" title="theme">


    	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries in IE8, IE9 -->
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
		<![endif]-->
        <link rel="stylesheet" Type="text/css" href="{{ asset('css/M_Rare.css') }}">


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


    <div class="container" style="margin-top: 150px">
        @if(Session::has('delete'))
            <p style="width: 200px; align-item: center; justify-content: center; margin-left: 450px" class="alert alert-danger">{{ Session::get('delete') }}</p>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-2">
                 @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>customer</th>
                            <th>Product</th>
                            <th>Total</th>
                            <th>paid</th>
                            <th>Livery</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($orders as $order )
                          <tr>
                              <td> {{ $order->id }} </td>
                              <td> {{ $order->user->name }} </td>
                              <td> {{ $order->product_name }} </td>
                              <td> {{ $order->total }} DA </td>
                              <td>
                                 @if ($order->paid)
                                     <i class="fa fa-chack text-success"></i>
                                 @else
                                    <i class="fa fa-times text-danger"></i>
                                 @endif
                              </td>
                              <td>
                                 @if ($order->delivered)
                                   <i class="fa fa-check text-success"></i>
                                 @else
                                  <i class="fa fa-times text-danger"></i>
                                 @endif
                              </td>
                              <td class="d-flex flex-row justify-content-center align-items-center">
                                  <form method="POST" action="{{ route("orders.update",$order->id) }}">
                                    @csrf
                                    @method("PUT")
                                    <button type="submit" class="btn btn-lg btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                  </form>
                              </td>
                              <td>
                                  <form id=" {{ $order->id }} "  method="POST" action="{{ route("orders.destroy",$order->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" onclick="return confirm('are you sure you want to delete this order ?')"
                                            class="btn btn-lg btn-danger">
                                            <i class="bi bi-trash3"></i>
                                    </button>
                                  </form>
                              </td>
                          </tr>

                       @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="justify-content-center d-flex">
                    {{ $orders->links()}}
                </div>
            </div>
        </div>
    </div>

  </body>
</html>
