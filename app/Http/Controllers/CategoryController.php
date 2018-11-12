<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
      return view('categories.index');
    }

    public function create(){
      return view('categories.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(Category $category){
      return view('categories.index');
    }

    public function edit(Category $category){
      return view('categories.edit');
    }
    
    public function update(Request $request, Category $category)
    {
      
    }

    public function destroy(Category $category)
    {
      
    }
}
