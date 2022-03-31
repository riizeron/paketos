@extends('layouts.app')

@section('content')

<div class="container">
    <p style="text-decoration: underline">{{ $paket->category }} bag</p>
    <div class="row">
        <div class="col-sm-8">
            <br>
            <img src="/storage/{{ $paket->image }}" style="width: 70%" alt="paket image">
        </div>
        <div class="col-sm-4">
            <div class="rating-result">
                <span class="active"></span>	
                <span class="active"></span>    
                <span class="active"></span>  
                <span></span>    
                <span></span>
            </div>
            <h2>{{ $paket->name }}</h2>
            <p>{{ $paket->description }}</p>
            <p><i>Vendor: {{ $paket->vendor }}</i></p>
            <p>{{ $paket->price }} RUB</p>
            <a href="/paket/{{ $paket->id }}/tocart" class="btn btn-success">Add to cart</a>
        </div>
    </div>
    <br><br><br><br>
    <h5>Reviews</h5>
    @if($reviews == NULL)
        <p><i>No reviews</i></p>
    @else
        <ul>
            @foreach($reviews as $review)
            <li>
                <div style="background:aquamarine">
                    <h5>{{ App\Models\User::find($review->user)->name }}</h5>
                    <p><i>{{ $review->subject }}</i></p>
                    <p>{{ $review-> message }}</p>
                    <p><i>{{ App\Models\User::find($review->user)->email }}</i></p>
                </div>
            <li>
            @endforeach
        </ul>
    @endif
    <p>Give a review:</p>
    <div class="container">
        <form method="post" action="/paket/{{ $paket->id }}/review">
            @csrf
            <div class="rating-area">
                    <input type="radio" id="star-5" name="rating" value="5">
                    <label for="star-5" title="Rate 5"></label>	
                    <input type="radio" id="star-4" name="rating" value="4">
                    <label for="star-4" title="Rate 4"></label>    
                    <input type="radio" id="star-3" name="rating" value="3">
                    <label for="star-3" title="Rate 3"></label>  
                    <input type="radio" id="star-2" name="rating" value="2">
                    <label for="star-2" title="Rate 2"></label>    
                    <input type="radio" id="star-1" name="rating" value="1">
                    <label for="star-1" title="Rate 1"></label>
            </div><br>
            <textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Write" required></textarea><br>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
    </div>
</div>

@endsection