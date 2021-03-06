<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller {
    //

    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }


    public function show(Category $category){
        return view('categories.show', compact('category'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(CategoryRequest $request){
        $formData = $request->all();
        Category::create($formData);
        return redirect('categories');
    }

}
