@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Order list</h2>
        </div>
    </div>
                @if($users != NULL)
                    <ul>
                    @foreach($users as $user)
                        <li>
                            <div class="product-list">
                                <div class="row">
                                    <div class="col-sm-4">
                                            <p>{{ $user->name }}</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <i>{{ $user->email }} RUB</i>
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="/user/{{ $user->id }}" class="btn btn-outline-secondary">do</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                @endif
                <p><i>No users</i></p>
</div>

@endsection