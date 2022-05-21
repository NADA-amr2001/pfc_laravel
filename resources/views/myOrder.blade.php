@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 150px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                    <tr>

                     <td> {{ $item->product_name }} </td>
                     <td> {{ $item->total }} DA </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
        </div>
    </div>
    </div>

</div>
@endsection
