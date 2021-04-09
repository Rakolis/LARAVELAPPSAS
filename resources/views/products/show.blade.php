@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $product->title }}
            </h1>
        </div>

        <div class="col-md-12">
            <small>{{ $product->price() }}</small>
        </div>

        <div class="col-md-12">
            @if($product->category)
                Produkto kategorija: {{ $product->category->title }}
            @endif
        </div>

        <hr>
        <div class="col-md-12">
            <h2>Rasyti komentara</h2>
            <form method="post" action="{{ route('comments.create') }}">
                @csrf
                <textarea name="text" class='form-control' placeholder="Jusu komentaras" required></textarea>
                <input type="submit" value="Rasyti komentara" class="btn btn-primary mt-3" />
                <!-- -- Perduodame produkto ID kuriam produktui tures buti priskirtas komentaras-- --> 
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
            </form>

            <hr>
            <hr>

            <h2>Produkto komentarai</h2>
            <hr>
            @foreach($product->comments as $comment)
                <div class="card mt-3">
                    <div class="card-header">
                        {{ $comment->name }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $comment->text }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection


