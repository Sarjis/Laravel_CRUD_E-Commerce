@extends('front-end.master')
@section('title')
    Checkout
@endsection
@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="{{route('/')}}">Home</a> / <span>Checkout</span></h3>
        </div>
    </div>
    <!--banner-->

    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-lg-offset-1">
                        <h3 class="text-center text-success">My Shopping Cart</h3>
                        <table class="table table-bordered table-hover">
                            <tr class="bg-primary">
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total TK.</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @php($sum=0 )
                            @foreach($cartItems as $cartItem)
                                <tr>

                                    <td>{{$i++}}</td>
                                    <td>{{$cartItem->name}}</td>
                                    <td><img src="{{asset($cartItem->options->image)}}" width="100px" height="150"></td>
                                    <td>{{$cartItem->price}}</td>
                                    <td>
                                        {{Form::open(['method'=>'post','route'=>'update-cart-item'])}}
                                        <input type="number" name="qty" value="{{$cartItem->qty}}" min="1">
                                        <input type="hidden" name="rowId" value="{{$cartItem->rowId}}" >
                                        <input type="submit" name="btn" value="Update Item">

                                        {{Form::close()}}
                                    </td>
                                    <td>{{$total=$cartItem->price*$cartItem->qty}}</td>
                                    <td>
                                        <a href="{{route('delete-cart-item',['rowId'=>$cartItem->rowId])}}"
                                           onclick="return confirm('Are you sure?') " class="btn btn-danger btn-xs"
                                           title="Delete"><span
                                                    class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                                <?php $sum = $sum + $total?>
                            @endforeach
                        </table>
                        <table class="table table-bordered">
                            <tr class="text text-success">
                                <th> Total Price without vat (TK. )</th>
                                <td> {{$sum}}</td>
                            </tr>
                            <tr></tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-lg-offset-1">
                        <a href="{{route('checkout')}}" class="btn btn-success pull-right">Checkout</a>
                        <a href="{{route('/')}}" class="btn btn-success pull-left">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection