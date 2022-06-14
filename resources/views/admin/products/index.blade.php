
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


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
        <style>
            .label,.glyphicon { margin-right:5px; }
            #add_prod{
                background: #60a3bc;
             transform: translateY(20px);
              border: none;
             border-bottom: 3px solid #fff;
             border-color: #666666;
             color: white;
             transition: 0.3s all;
             margin-bottom: 20px;
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
        @if(Session::has('delete'))
            <p style="width: 200px; align-item: center; justify-content: center; margin-left: 450px" class="alert alert-danger">{{ Session::get('delete') }}</p>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-2">
                 @include('layouts.sidebar')
            </div>
            <div class="col-md-10">

                <a id="add_prod" href="/admin/products/create" class="btn  btn-lg my-2"><i class="fa fa-plus"></i></a>

                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Disponible</th>
                            <th>image</th>
                            <th>Category</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $product )
                          <tr>
                              <td> {{ $product->id }} </td>
                              <td> {{ $product->title }} </td>
                              <td> {{ Str::limit($product->description,50) }} </td>
                              <td> {{ $product->price }} DA</td>
                              <td> {{ $product->total }} DA</td>
                              <td>
                                @if ($product->in_stock > 0)
                                 <i class="fa fa-check text-success"></i>
                              @else
                               <i class="fa fa-times text-danger"></i>
                              @endif
                              </td>
                              <td> <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="60" height="60" class="img-fluid rounded"> </td>
                              <td> {{ $product->category->title }} </td>
                              <td class="d-flex flex-row justify-content-center align-items-center">
                                  <a href="/admin/products/{{$product->id}}/edit" class="btn btn-lg btn-warning mr-2"><i class="fa fa-edit"></i></a>
                              </td>
                              <td>
                                <form id=" {{ $product->id }} "  method="POST" action="{{ route("admin.products.destroy",$product->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" onclick="return confirm('are you sure you want to delete this product ?')"
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
                    {{ $products->links()}}
                </div>
            </div>
        </div>
    </div>

  </body>
</html>









