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

        // $counttournaments = Tournament::where('users_id', auth()->user()->id)

        // ->where('status', 'rejected')
        // ->count();
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        return view('penyelenggara.game', compact('categories', 'counttournaments'));
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

            return redirect()->route('category.index')->with('success', 'Game berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);

            // return redirect()->route('category.index')->with('warning', 'Game gagal ditambahkan');
        }
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        try{
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

        return redirect()->route('category.index')->with('success', 'Game berhasil di ubah');
    } catch (\Throwable $th) {
        return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
    }
    }

    public function destroy(Category $category)
    {
        try {
            // Check if the category is being used by any tournaments
            if ($category->tournament()->exists()) { // Use `()->exists()` instead of `->isEmpty()`
                return redirect()->route('category.index')->with('warning', 'Gagal menghapus data karena data masih digunakan..');
            }

            // If category is not used, delete the photo if it exists
            if (Storage::disk('public')->exists($category->photo)) {
                Storage::disk('public')->delete($category->photo);
            }

            // Delete the category
            $category->delete();

            return redirect()->route('category.index')->with('success', 'Game berhasil di hapus');
        } catch (Exception $th) {
            return redirect()->route('category.index')->with('error', 'Game gagal di hapus.');
        }

        // try {
        //     // Check if the category is being used by any tournaments
        //     if ($category->tournament()->exists()) {
        //         return redirect()->route('category.index')->with('warning', 'CATEGORY IS USED BY A TOURNAMENT AND CANNOT BE DELETED.');
        //     }

        //     // If category is not used, delete the photo if it exists
        //     if (Storage::disk('public')->exists($category->photo)) {
        //         Storage::disk('public')->delete($category->photo);
        //     }

        //     // Delete the category
        //     $category->delete();

        //     return redirect()->route('category.index')->with('success', 'CATEGORY SUCCESSFULLY REMOVED');
        // } catch (Exception $th) {
        //     return redirect()->route('category.index')->with('error', 'FAILED TO DELETE CATEGORY.');
        // }
    }

}
