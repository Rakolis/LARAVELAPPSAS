@extends('layouts.app')

@section('content')


<div class="col-sm-12"><h1>Categories</h1></div>


    @foreach($categories as $category)

       <div> <strong> {{$category->title}} </strong> </div>
       
        
       @foreach($category->products as $product)
            <li>
            <a href="{{route('products.show', $product->id)}}">
            {{$product->title}}
            </a>
            </li>
        @endforeach
       <a href="#" class = "btn btn-success">Redaguoti</a>
       <a href="{{route('categories.delete', $category->id)}}" class = "btn btn-danger">Istrinti</a>
       
       <hr>
    @endforeach
 
    


@endsection('content')