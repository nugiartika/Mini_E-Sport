<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Models\Category;
use App\Models\Member;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            $duplicates = $this->getDuplicatesEmail($request->nickname);
            if (!empty($duplicates)) {
                // Handle duplicates found in the nicknames
                return redirect()->back()->withInput()->withErrors(['error' => 'Duplikat ditemukan dalam email']);
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

            if($member->team->tournament_id) {
                $teamTournament = TeamTournament::create([
                    'team_id' => $member->team->id,
                    'tournament_id' => $member->team->tournament_id,
                ]);

                $tournamentData = Tournament::where([
                    ['id', $member->team->tournament_id],
                    ['paidment', 'Gratis']
                ]);

                if($tournamentData->exists()) {
                    Transaction::create([
                        'name' => auth()->user()->name,
                        'email' => auth()->user()->email,
                        'phone' => '081234567890',
                        'status' => 'PAID',
                        'team_tournament_id' => $teamTournament->id,
                        'payment_method' => 'FREE',
                        'amount' => 0,
                        'transaction_id' => 'TRANS-'. Str::upper(Str::random(16)),
                        'ref_id' => 'INV-'. Str::upper(Str::random(16))
                    ]);
                }
            }

            return redirect()->route('team.index')->with('success', 'Members added successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
        }
    }

    private function getDuplicatesEmail(array $arr)
    {
        // Count the frequency of each element in the array
        $counts = array_count_values($arr);

        // Select elements that appear more than once
        $duplicates = [];
        foreach ($counts as $item => $count) {
            if ($count > 1) {
                $duplicates[] = $item;
            }
        }

        return $duplicates;
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
            $duplicates = $this->getDuplicates($request->nickname);
            if (!empty($duplicates)) {
                // Lakukan sesuatu untuk menangani duplikat
                return redirect()->back()->withInput()->withErrors(['error' => 'Duplikat ditemukan dalam email']);
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
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors(['error' => $th->getMessage()]);
        }
    }

    private function getDuplicates(array $arr)
    {
        // Menghitung frekuensi setiap elemen dalam array
        $counts = array_count_values($arr);

        // Memilih elemen yang muncul lebih dari sekali
        $duplicates = [];
        foreach ($counts as $item => $count) {
            if ($count > 1) {
                $duplicates[] = $item;
            }
        }

        return $duplicates;
    }
}
