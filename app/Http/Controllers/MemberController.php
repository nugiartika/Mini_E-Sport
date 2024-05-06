<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        $teams = Team::all();
        return view('user.team', compact('members', 'teams'));
    }



// public function store(Request $request)
// {
//     $request->validate([
//         'team_id' => 'required|exists:teams,id',
//         'members.*' => 'required|string|max:255', // You can adjust the validation rules as needed
//     ]);

//     // Fetch the team based on the selected team_id
//     $team = Team::findOrFail($request->team_id);

//     // Get the category ID from the team
//     $categoryId = $team->category_id;

//     // Get the membersPerTeam from the category
//     $membersPerTeam = Category::findOrFail($categoryId)->membersPerTeam;

//     // Create members
//     foreach ($request->members as $memberName) {
//         Member::create([
//             'team_id' => $request->team_id,
//             'name' => $memberName,
//         ]);
//     }

//     return redirect()->route('member.create')->with('success', 'Members added successfully.');
// }

    public function create(Request $request)
    {
        $members = Member::all();
        $teams = Team::all();
        $selectedTeamId = $request->input('team_id');

        return view('user.createmember', compact('members', 'teams', 'selectedTeamId'));
    }

    // public function store(Request $request)
    // {
    //     $teams_id = $request->team_id;
    //     $nicknames = $request->nickname;

    //     foreach ($request->member as $index => $memberName) {
    //         Member::create([
    //             'member' => $memberName,
    //             'nickname' => $request->nickname[$index],
    //             'team_id' => $teams_id,
    //         ]);
    //     }

    //     // dd($member);

    //     return redirect()->route('team.index')->with('success', 'Members added successfully');
    // }

    public function store(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'member.*' => 'required', // Member inti wajib diisi
            'nickname.*' => 'required', // Nickname inti wajib diisi
            'member_cadangan.*' => 'nullable', // Member cadangan dapat kosong
            'nickname_cadangan.*' => 'nullable', // Nickname cadangan dapat kosong
        ]);

        // Cek validasi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $teams_id = $request->team_id;
        $nicknames = $request->nickname;

        // Store "inti" members
        foreach ($request->member as $index => $memberName) {
            Member::create([
                'member' => $memberName,
                'nickname' => $request->nickname[$index],
                'team_id' => $teams_id,
                'status' => 'inti',
            ]);
        }

        // Store "cadangan" members
        if ($request->has('member_cadangan')) {
            foreach ($request->member_cadangan as $index => $memberName) {
                Member::create([
                    'member' => $memberName,
                    'nickname' => $request->nickname_cadangan[$index],
                    'team_id' => $teams_id,
                    'status' => 'cadangan',
                ]);
            }
        }

        return redirect()->route('team.index')->with('success', 'Members added successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
