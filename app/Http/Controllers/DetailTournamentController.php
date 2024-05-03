<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;

class DetailTournamentController extends Controller
{
    public function index()
    {
        $tournaments =Tournament::where('status', 'accepted')->get();
        $user = User::all();
        $category = Category::all();
        return view('admin.ListTournament', compact('tournaments', 'user', 'category'));

    }

    public function detail()
    {
        $turnamets = Tournament::all();
        $user  = User::all();
        $category = Category::all();

        return view('admin.detailTournament', compact('turnamets', 'user', ));
    }


}
