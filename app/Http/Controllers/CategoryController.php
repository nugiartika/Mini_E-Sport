<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $a = $request->input('search');
            $category = Category::where('name', 'LIKE', "%$a%")->paginate(5);
        } else {
            $category = Category::paginate(5);
        }
        return view('category', compact('category'));
    }

    public function create()
    {
        $category=Category::all();
        return view ('category',compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('category.index')->with('success','CATEGORY SUCCESSFULLY ADDED');
    }

    public function show(Category $category)
    {

    }

    public function edit(Category $category)
    {
        $category=Category::all();
        return view ('category',compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('category.index')->with('success','CATEGORY SUCCESSFULLY UPDATED');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success','CATEGORY SUCCESSFULLY REMOVED');
    }
}
