<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->has('search'), function ($query) use ($request) {
            $a = $request->input('search');
            return $query->where('name', 'LIKE', "%$a%");
        })->paginate(5);

        return view('admin.category', compact('categories'));
    }

    public function indexuser()
    {
        $categories = Category::all();
        $countTournaments = Tournament::where('users_id', auth()->id())
            ->where('status', 'rejected')
            ->count();

        return view('penyelenggara.game', compact('categories', 'countTournaments'));
    }

    public function indexusers()
    {
        $categories = Category::all();

        return view('user.game', compact('categories'));
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
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        try {
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
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('error', 'CATEGORY ADDED FAILED');
        }
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $oldPhotoPath = $category->photo;

        $dataToUpdate = [
            'name' => $request->input('name_update'),
            'membersPerTeam' => $request->input('membersPerTeam_update'),
        ];

        if ($request->hasFile('photo_update')) {
            $foto = $request->file('photo_update');
            $path = $foto->store('game', 'public');
            $dataToUpdate['photo'] = $path;
        }

        $category->update($dataToUpdate);

        if ($category->wasChanged('photo') && $oldPhotoPath) {
            Storage::disk('public')->delete($oldPhotoPath);
            $localFilePath = public_path('storage/' . $oldPhotoPath);
            if (File::exists($localFilePath)) {
                File::delete($localFilePath);
            }
        }

        return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY UPDATED');
    }

    public function destroy(Category $category)
    {
        try {

            if (Storage::disk('public')->exists($category->photo)) {
                Storage::disk('public')->delete($category->photo);
            }

            $category->delete();

            return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY REMOVED');
        } catch (Exception $th) {
            return redirect()->route('category.index')->with('error', 'GAGAL MENGHAPUS CATEGORY. ');
        }
    }
}
