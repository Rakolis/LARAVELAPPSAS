@extends('layouts.app')

@section('content')
<h1>Sukurti kategorija</h1>

<div class="col-md-6">
<form method = "POST" action ="{{route('categories.store')}}">
@csrf
    <div class="form-group">
        <input type="text" required name = "title" class = "form-control" placeholder= "Pavadinimas">
    </div>
    <div class="form-group">
        <input type="text" name = "description" class = "form-control" placeholder= "Aprasymas">
    </div>
    <div class="form-group">
        <input type="submit" name = "submit" class = "btn btn-success">
    </div>


</form>
</div>

@endsection('content')