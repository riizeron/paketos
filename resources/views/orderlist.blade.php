@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Order list</h2>
        </div>
    </div>
                @if($orders != NULL)
                    <ul>
                    @foreach($orders as $order)
                        <li>
                            <div class="product-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                            <p>{{ $order->updated_at }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <i>{{ $order->price }} RUB</i>
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="/cart/{{ $order->id }}" class="btn btn-outline-secondary">do</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                @endif
</div>

@endsection