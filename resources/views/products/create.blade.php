@extends('layouts.app')

@section('content')
<h1>Sukurti produkta</h1>

<div class="col-md-6">
<form method = "POST" action ="{{route('products.store')}}">
@csrf
    <div class="form-group">
        <input type="text" required name = "title" class = "form-control" placeholder= "Pavadinimas">
    </div>
    <div class="form-group">
        <input type="number" step ="0.01" required name = "price" class = "form-control" placeholder= "Kaina">
    </div>
    <div class="form-group">
    <select name="category_id" class= "form-control">Pasirinkite kategorija
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <input type="submit" name = "submit" class = "btn btn-success">
    </div>


</form>
</div>

@endsection('content')
