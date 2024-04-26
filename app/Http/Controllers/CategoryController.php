<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function indexuser(Request $request)
    {
      $category = Category::all();
        return view('penyelenggara.game', compact('category'));
    }
    public function indexusers(Request $request)
    {
      $category = Category::all();
        return view('user.game', compact('category'));
    }


    public function getMembersPerTeam($categoryId)
    {
        $category = Category::find($categoryId);

        if ($category) {
            return response()->json(['membersPerTeam' => $category->members_per_team]);
        } else {
            return response()->json(['error' => 'Category not found'], 404);
        }
    }



    public function create()
    {
        $category=Category::all();
        return view ('admin.category',compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $gambar = $request->file('photo');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('game', $gambar);
        }

        Category::create([
            'name' => $request->name,
            'photo' => $path_gambar,
            'membersPerTeam' => $request->membersPerTeam,
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
