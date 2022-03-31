@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Cart</h3>   
    <div class="row">
    <div class="col-sm-8">
        <div class="container" style="margin: 5%">
            @if($items == NULL)
                <h2>Your cart is empty</h2>
            @else
            <ul type = None>
            @foreach($items as $item)
                <li>
                        <div class="product-list hover-list">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="/storage/{{ $item->image }}" style="width: 40%" alt="">
                                </div>
                                <div class="col-sm-4">
                                <a href="/paket/{{ $item->id }}" style="text-decoration: none; color: #000">{{ $item->name }}</a>
                                </div>
                                <div class="col-sm-3">
                                    {{ $item->price }}
                                </div>
                                <div class="col-sm-2">
                                    <a href="/user/{{ Auth::user()->id }}/cart/{{ $item->id }}/del" class="btn btn-outline-secondary">Del</a>
                                </div>
                            </div>
                        </div>
                </li><br>
            @endforeach
            </ul>
            <h4>Total price: <i>{{ $cart->price }} RUB</i></h4>
            @endif
        </div>
    </div>
    <div class="col-sm-4">
        <div class="container" style="margin: 20%">
            @if($items == NULL)
            <a href="#" class="btn btn-success disabled">Checkout</a>
            @else
            <a href="/cart/checkout" class="btn btn-success">Checkout</a>
            @endif
        </div>
    </div>
</div>
</div>

@endsection
