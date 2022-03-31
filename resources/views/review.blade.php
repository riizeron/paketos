@extends('layout')

@section('main')
<h2>Send review</h2>

@if($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/review/check">
    @csrf
    <input type="text" name="subject" id="subject" placeholder="Type subject" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea><br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
<br>
<h3>Reviews</h3>
@foreach($reviews as $el)
    <div class="alert alert-warning">
        <h5>{{ $el->subject }}</h5>
        <b>{{ $el->text }}</b>
        <p>{{ User::find($el->user)->name }}</p>
        <p>{{ User::find($el->user)->email }}</p>
    </div>
@endforeach
</div>
@endsection