<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;

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


    public function store(StoreMemberRequest $request)
    {
        try {
            $nicknames = array_merge(
                array_filter($request->nickname, 'is_string'),
                array_filter($request->nickname_cadangan, 'is_string')
            );

            $duplicates = $this->getDuplicatesEmail($nicknames);
            if (!empty($duplicates)) {
                // Handle duplicates found in the nicknames
                return redirect()->back()->withInput()->withErrors(['error' => 'Duplikat ditemukan dalam email']);
            }
            $teams_id = $request->team_id;
            $nicknames = $request->nickname;

            $teamData = Member::find($teams_id);

            // Store "inti" members
            foreach ($request->member as $index => $memberName) {
                $is_captain = $index === 0 ? 1 : 0;

                Member::create([
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
                    Member::create([
                        'member' => $memberName,
                        'nickname' => $request->nickname_cadangan[$index],
                        'team_id' => $teams_id,
                        'status' => 'cadangan',
                        'is_captain' => 0,
                    ]);
                }
            }

            return redirect()->route('team.index')->with('success', 'Anggota telah ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
        } catch (\Exception $th) {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
        }
    }

    private function getDuplicatesEmail(array $arr)
    {
        return collect($arr)
            ->countBy()
            ->filter(fn ($count) => $count > 1)
            ->keys()
            ->all();
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
            // $nicknames = array_merge($request->nickname, $request->nickname_cadangan);
            $nicknames = array_merge(
                array_filter($request->nickname, 'is_string'),
                array_filter($request->nickname_cadangan, 'is_string')
            );

            $duplicates = $this->getDuplicates($nicknames);
            if (!empty($duplicates)) {
                return redirect()->back()->withInput()->withErrors(['error' => 'Email tidak boleh ada yang sama.']);
            }

            $teams_id = $request->team_id;
            $nicknames = $request->nickname;

            // Store "inti" members
            foreach ($request->member as $index => $memberName) {
                $is_captain = $index === 0 ? 1 : 0;

                Member::create([
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
                    Member::create([
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

    private function getDuplicates(array $arr)
    {
        return collect($arr)
            ->countBy()
            ->filter(fn ($count) => $count > 1)
            ->keys()
            ->all();
    }
}
