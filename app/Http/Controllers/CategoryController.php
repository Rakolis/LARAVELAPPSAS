<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        

        return view('categories.index', compact('categories'));
    }

    public function create(){
        
        return view('categories.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->save();
        
        return redirect()->route('categories.index');
    }

    public function delete(Request $request, $id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
    public function update(){
        echo 'cia bus update category';
    }
}
