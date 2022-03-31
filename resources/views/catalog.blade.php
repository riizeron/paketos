@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2>Avaliable pakets</h2>
            </div>
            <div class="col-sm-2">
                @guest
                @else
                    @if(Auth::user()->admin)
                        <a href="/add" class="btn btn-success">Add paket</a><br>
                    @endif
                @endguest
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-10">
                <p>{{ strtoupper($category)}} BAGS</p>
                <div class="row">
                    @if($pakets->count() == 0)
                        <p>There is no pakets like this</p>
                    @else
                        @foreach($pakets as $paket)
                            <div class="col-sm-4">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="/paket/{{$paket->id}}" style="text-decoration: none">
                                                <img src="/storage/{{$paket->image}}" alt="paket image">
                                            </a>
                                        </div>
                                        <div class="product-list">
                                            <div class="rating-mini">
                                                <span class="active"></span>	
                                                <span class="active"></span>    
                                                <span class="active"></span>  
                                                <span></span>    
                                                <span></span>
                                            </div>
                                            <a href="/paket/{{$paket->id}}" style="text-decoration: none">
                                                <h3>{{ $paket->name }}</h3>
                                            </a>
                                            <span class="price">{{$paket->price}} RUB</span>
                                            <a href="/paket/{{ $paket->id }}/tocart" class="button" id="nondecbut">Add to cart</a>
                                        </div>
                                    </div>
                                    <br>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <div class="dropdown">
                    <h6 class="dropdown-header">Category</h6>
                    <a class="dropdown-item" href="/catalog">All</a>
                    <a class="dropdown-item" href="/catalog/tissue">Tissue</a>
                    <a class="dropdown-item" href="/catalog/plastic">Plastic</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- <div class="container text-center" id="catalog-container">
        <div class="row">
            @if($pakets->count() == 0)
                    <p>There is no pakets like this</p>
            @else
                @foreach($pakets as $paket)
                    <div class="col-sm-4">
                        <a href="/catalog/{{$paket->id}}">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/storage/{{$paket->image}}" alt="paket image">
                                </div>
                                <div class="product-list">
                                    <h3>{{ $paket->name }}</h3>
                                    <span class="price">{{$paket->price}}</span>
                                    <a href="" class="button">Add to cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div> -->
@endsection