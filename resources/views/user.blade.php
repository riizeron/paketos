@extends('layouts.app')

@section('content')

<div class="container">
    <p style="text-decoration: underline">{{ 'Profile' }}</p>
    <div class="row">
        <div class="col-sm-7">
            <br>
            <h4>{{ $user->name }}</h4>
            <h5>{{ $user->email }}</h5>
        </div>
        <div class="col-sm-5">
            <h2>Your orders:</h2>
                @if($orders != NULL)
                    <ul>
                    @foreach($orders as $order)
                        <li>
                            <div class="product-list">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <p>{{ $order->updated_at }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <i>{{ $order->price }} RUB</i>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="#" class="btn btn-outline-secondary">Track</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                @endif
        </div>
    </div>
</div>

@endsection