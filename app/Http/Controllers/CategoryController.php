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
        return view('admin.category', compact('category'));
    }

    public function create()
    {
        $category=Category::all();
        return view ('admin.category',compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $data = [];

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->store('images', 'public');
            $data['photo'] = $path;
        } else {
            $defaultImagePath = 'images/default-photo.jpg';
            $data['photo'] = $defaultImagePath;
        }

        Category::create([
            'name' => $request->input('name'),
            'photo' => $data['photo'],
        ]);

        return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY ADDED');
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY UPDATED');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY REMOVED');
    }
}
