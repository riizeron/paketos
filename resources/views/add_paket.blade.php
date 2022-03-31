@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add paket</h2><br>

    @if($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/catalog/check" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Type name" class="form-control"><br>
        <input type="text" name="price" id="price" placeholder="Type price" class="form-control"><br>
        <input type="text" name="amount" id="amount" placeholder="Type amount" class="form-control"><br>
        
        <label for="category">Choose category:</label>
        <ul name="category" type="none">
            <li><input type="radio" class="radio" name="category" value="tissue">  Tissue paket</li>
            <li><input type="radio" class="radio" name="category" value="plastic" checked>  Plastic paket</li>
        </ul>
        <br>
        <textarea name="description" id="description" placeholder="Type description" class="form-control"></textarea><br>
        <label for="image">Select image: </label>
        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg"><br><br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <br>
</div>

</div>
@endsection