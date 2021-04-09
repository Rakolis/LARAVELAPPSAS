<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(Request $request){
        // ->get() grazina rezultata, butinas.
        $products = Product::where('price', '<=', 10)
            ->orwhere('title', 'LIKE', '%pro%')
            ->get();

        // $products = Product::where('price', '>', 100)->take(3)->get(); paimtu tik tris
        // $products = Product::all(); grazina visus
        // $products = Product::take(10)->get(); grazina 10 elementu

        $productsCount = Product::count();
        $products = Product::paginate(5);
		// grazzinu view faila is /resources/views/products/index.blade.php
		return view('products.index', compact('products', 'productsCount'));
	}

    public function create(){
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }
    public function store(Request $request){
        $product = new Product();
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index');
    }
    // findOrFail grazina 404 klaidos psl jei nesuveikia.
    public function delete(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
    public function show($id) {
		// findOrFail funkcija grazina 404 atsakyma, jei toks elementas nerastas duombazeje
        $product = Product::findOrFail($id);
        // $comments = Comment::where('product_id', '=', $product->id)->get();

		return view('products.show', compact('product'));
    }

    public function edit($id){
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));

    }
    public function upadte(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->title = $request->input('title');
        $product->title = $request->input('price');
        $product->save();
        return redirect()->route('product.show', $product->id);

    }
}
