<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Models\Category;
use App\Models\Member;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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


    public function create(Request $request)
    {
        $members = Member::all();
        $teams = Team::all();
        $selectedTeamId = $request->input('team_id');

        return view('user.createmember', compact('members', 'teams', 'selectedTeamId'));
    }


    // public function store(Request $request)
    // {
    //     // Validasi data input
    //     $validator = Validator::make($request->all(), [
    //         'member.*' => 'nullable', // Member inti wajib diisi
    //         'nickname.*' => 'required', // Nickname inti wajib diisi
    //         'member_cadangan.*' => 'nullable', // Member cadangan dapat kosong
    //         'nickname_cadangan.*' => 'nullable', // Nickname cadangan dapat kosong
    //         'is_captain.*' => 'nullable', // Isi kapten harus boolean

    //     ]);

    //     // Cek validasi
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $teams_id = $request->team_id;
    //     $nicknames = $request->nickname;

    //     // Store "inti" members
    //     foreach ($request->member as $index => $memberName) {
    //         $is_captain = $index === 0 ? 1 : 0;

    //         $member = Member::create([
    //             'member' => $memberName,
    //             'nickname' => $request->nickname[$index],
    //             'team_id' => $teams_id,
    //             'status' => 'inti',
    //             'is_captain' => $is_captain,
    //         ]);
    //     }

    //     // Store "cadangan" members
    //     if ($request->has('member_cadangan')) {
    //         foreach ($request->member_cadangan as $index => $memberName) {
    //         $member = Member::create([
    //                 'member' => $memberName,
    //                 'nickname' => $request->nickname_cadangan[$index],
    //                 'team_id' => $teams_id,
    //                 'status' => 'cadangan',
    //                 'is_captain' => 0,
    //             ]);
    //         }
    //     }
    public function store(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'member.*' => 'nullable', // Member inti wajib diisi
            'nickname.*' => [
                'required',
                Rule::unique('members', 'nickname')->where(function ($query) use ($request) {
                    return $query->where('team_id', $request->team_id);
                })
            ],
            'member_cadangan.*' => 'nullable', // Member cadangan dapat kosong
            'nickname_cadangan.*' => [
                'nullable',
                Rule::unique('members', 'nickname')->where(function ($query) use ($request) {
                    return $query->where('team_id', $request->team_id);
                })
            ],
            'is_captain.*' => 'nullable', // Isi kapten harus boolean

        ],[
            'nickname.*.required' => 'Kolom Email wajib diisi.',
            'nickname.*.unique' => 'Email tidak bolek sama di dalam tim ini.',
            'nickname_cadangan.*.unique' => 'Email cadangan harus unik di dalam tim ini.',
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
            $is_captain = $index === 0 ? 1 : 0;

            $member = Member::create([
                'member' => $memberName,
                'nickname' => $request->nickname[$index],
                'team_id' => $teams_id,
                'status' => 'inti',
                'is_captain' => $is_captain,
            ]);
        }

        // Store "cadangan" members
        if ($request->has('member_cadangan')) {
            foreach ($request->member_cadangan as $index => $memberName) {
            $member = Member::create([
                    'member' => $memberName,
                    'nickname' => $request->nickname_cadangan[$index],
                    'team_id' => $teams_id,
                    'status' => 'cadangan',
                    'is_captain' => 0,
                ]);
            }
        }

        return redirect()->route('team.index')->with('success', 'Members added successfully');
    }


    public function createMember(Request $request)
    {
        $members = Member::all();
        $teams = Team::all();
        $selectedTeamId = $request->input('team_id');

        return view('user.addmember', compact('members', 'teams', 'selectedTeamId'));
    }


    public function storeMember(MemberRequest $request)

    {
        try {

        // // Validasi data input
        // $validator = Validator::make($request->all(), [
        //     'member.*' => 'nullable', // Member inti wajib diisi
        //     'nickname.*' => [
        //         'required',
        //         Rule::unique('members', 'nickname')->where(function ($query) use ($request) {
        //             return $query->where('team_id', $request->team_id);
        //         })
        //     ],
        //     'member_cadangan.*' => 'nullable', // Member cadangan dapat kosong
        //     'nickname_cadangan.*' => [
        //         'nullable',
        //         Rule::unique('members', 'nickname')->where(function ($query) use ($request) {
        //             return $query->where('team_id', $request->team_id);
        //         })
        //     ],
        //     'is_captain.*' => 'nullable', // Isi kapten harus boolean

        // ],[
        //     'nickname.*.required' => 'Kolom Email wajib diisi.',
        //     'nickname.*.unique' => 'Email tidak bolek sama di dalam tim ini.',
        //     'nickname_cadangan.*.unique' => 'Email cadangan harus unik di dalam tim ini.',
        // ]);

        // // Cek validasi
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $teams_id = $request->team_id;
        $nicknames = $request->nickname;

        // Store "inti" members
        foreach ($request->member as $index => $memberName) {
            $is_captain = $index === 0 ? 1 : 0;

            $member = Member::create([
                'member' => $memberName,
                'nickname' => $request->nickname[$index],
                'team_id' => $teams_id,
                'status' => 'inti',
                'is_captain' => $is_captain,
            ]);
        }

        // Store "cadangan" members
        if ($request->has('member_cadangan')) {
            foreach ($request->member_cadangan as $index => $memberName) {
            $member = Member::create([
                    'member' => $memberName,
                    'nickname' => $request->nickname_cadangan[$index],
                    'team_id' => $teams_id,
                    'status' => 'cadangan',
                    'is_captain' => 0,
                ]);
            }
        }

        return redirect()->route('team.index')->with('success', 'Members added successfully');
    } catch (\Throwable $th) {
        return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
    }
    }

}
