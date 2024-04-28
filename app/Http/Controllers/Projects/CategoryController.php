<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('projects.categories.index', compact('categories'));
    }
    public function create(){
        return view('projects.categories.create');
    }
    public function store(CategoryRequest $request){
        $data = $request->validated();
        $category= Category::create($data);
        if ( $category){
            return redirect()->route('categories.index')->with('success','category Created Successfully');
        }

    return back()->withErrors('category not Created');
    }
        
    
    
    public function destroy(Category $category){
        
     $category=$category->delete();
        
        if ( $category){
            return redirect()->route('categories.index')->with('success','category Created Successfully');
        }

    return back()->withErrors('category not deleted');
    }
}
