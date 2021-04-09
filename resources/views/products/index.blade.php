@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <h1>Produktai ({{ $productsCount }})</h1>
    </div>

    @foreach($products as $product)
        <div class="col-sm-6">
            <h3>

                <a href="{{ route('products.show', $product->id) }}">
                    {{ $product->title }} <span class="comment_count">({{ $product->comments->count() }})</span>
                </a>
                @if($product->category)
                    <small>{{ $product->category->title }}</small>
                @endif

                <a href="{{ route('products.delete', $product->id) }}" class="btn btn-sm btn-danger">
                    Istrinti
                </a>

                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-success">
                    Redaguoti
                </a>
            </h3>
            <small>{{ $product->price }}€</small>
            <hr>
        </div>
    @endforeach
    <div class="col-md-12">
        {{ $products->links() }}
    </div>
@endsection