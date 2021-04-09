@extends('layouts.app')


@section('content')
    <div class="col-md-12">
        <h1> Redaguoti produkta </h1>
    </div>
    <div class="col-md-6">
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @csrf

            <div class="form-group">
                <input type="text" value="{{ $product->title }}" required placeholder="Pavadinimas" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <input type="text" value="{{ $product->price }}" required placeholder="Kaina" name="price" class="form-control" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
    </div>

@endsection