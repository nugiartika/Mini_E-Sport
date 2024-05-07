<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Category;
use App\Models\member;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', $user->id)->get();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();

        return view('penyelenggara.tournament', compact('tournaments', 'category', 'user', 'teamCounts', 'teamIdCounts'));
    }

    public function indexuser()
    {
        // $tournaments = Tournament::where('status', 'accepted')->get();
        $tournaments = Tournament::all();
        $user = User::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $teams = Team::all();
        return view('user.tournamentUser', compact('tournaments', 'category', 'user', 'teamCounts', 'teams', 'teamIdCounts'));
    }
    public function dashboard()
    {
        $tournaments = Tournament::where('status', 'accepted')->get();
        $user = User::all();
        // $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
        //     ->groupBy('tournament_id')
        //     ->get();
        $category = Category::all();
        return view('penyelenggara.Dashboard', compact('tournaments', 'category', 'user'));
    }

    public function indexadmin()
    {
        $tournaments = Tournament::all();
        $user = User::all();
        $category = Category::all();
        return view('admin.AccTournament', compact('tournaments', 'category', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournament = Tournament::all();
        $user = User::all();
        $category = Category::all();
        return view('penyelenggara.tambah', compact('tournament', 'category', 'user'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            try {
            $user = Auth::user();

            // Proses gambar
            $gambar = $request->file('images');
            $path_gambar = null;
            if ($gambar) {
                $path_gambar = Storage::disk('public')->put('tournament', $gambar);
            }


            // Kemudian simpan data ke dalam database
            $tournament = Tournament::create([
                'name' => $request->input('name'),
                'pendaftaran' => $request->input('pendaftaran'),
                'permainan' => $request->input('permainan'),
                'end_pendaftaran' => $request->input('end_pendaftaran'),
                'end_permainan' => $request->input('end_permainan'),
                'categories_id' => $request->input('categories_id'),
                'users_id' => $user->id,
                'slotTeam' => $request->input('slotTeam'),
                'contact' => $request->input('contact'),
                'images' => $path_gambar,
                'description' => $request->input('description'),
                'rule' => $request->input('rule'),
                'paidment' => $request->input('paidment'),
                'nominal' => $request->input('nominal'),
                'status' => 'pending',
                'prize' => $request->input('prize'),
                'note' => $request->input('note')
            ]);

            return redirect()->route('ptournament.index')->with('success', 'Tournament added successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan
            return back()->withErrors([$e->getMessage()]);
        }

    }


    public function filter(Request $request)
    {
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $category = Category::all();
        $selectedCategories = $request->input('categories_id', []);

        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();

        return view('penyelenggara.tournament', compact('teamIdCounts','teamCounts','tournaments', 'category', 'selectedCategories', 'oldSearch', 'user'));
    }


    /**
     * Display the specified resource.
     */
    // public function show(Tournament $tournament)
    // {
    //     $members = member::all();
    //     $teams = Team::all();
    //     $tournamentId = $tournament->id;
    //     return view('user.createteam', compact('tournamentId','members','teams'));
    // }

    public function detail($id)
    {
        $tournaments = Tournament::findOrFail($id);
        $user = User::all();
        $team = Team::count();
        $category = Category::all();
        return view('user.detailtournament', compact('tournaments', 'category', 'user', 'team'));
    }

    public function detailTournament($id)
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', $user->id)->get();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();

        // Ambil turnamen berdasarkan ID yang diberikan
        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournaments = Tournament::find($id);
        $category = Category::all();
        $user = User::all();
        return view('admin.konfirmtournament', compact('tournaments', 'category', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ], [
            'status.required' => 'Kolom STATUS wajib diisi.',
            'status.in' => 'Status harus berupa "accepted" atau "rejected".',
        ]);

        $status = $request->input('status');

        $data = [
            'status' => $status,
        ];

        $tournament->update($data);

        if ($status === 'rejected') {
            // Hapus turnamen yang sesuai dengan ID yang sedang diubah
            $tournament->delete();
            return redirect()->route('konfirmtournament')->with('success', 'Turnamen berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Gagal memperbarui status turnamen.');
    }


    public function edittour($id)
    {
        $tournament = Tournament::findOrFail($id);
        $user = User::all();
        $category = Category::all();
        return view('penyelenggara.edit', compact('tournament', 'category', 'user'));
    }

    public function updatetour(Request $request, $id)
    {
        $user = Auth::user();

        $tournament = Tournament::findOrFail($id);

        $gambar = $request->file('images');
        if ($gambar) {
            if ($tournament->images) {
                Storage::disk('public')->delete($tournament->images);
            }
            $path_gambar = Storage::disk('public')->put('tournament', $gambar);
            $tournament->images = $path_gambar;
        }

        $tournament->update([
            'name' => $request->name,
            'pendaftaran' => $request->pendaftaran,
            'permainan' => $request->permainan,
            'end_pendaftaran' => $request->end_pendaftaran,
            'end_permainan' => $request->end_permainan,
            'categories_id' => $request->categories_id,
            'users_id' => $user->id,
            'slotTeam' => $request->slotTeam,
            'contact' => $request->contact,
            'description' => $request->description,
            'rule' => $request->rule,
            'paidment' => $request->paidment,
            'nominal' => $request->nominal,
            'status' => 'pending',
        ]);

        return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tournament = Tournament::findOrFail($id);
            if ($tournament->images) {
                Storage::disk('public')->delete($tournament->images);
            }
            $tournament->delete();
            return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('ptournament.index')->with('error', 'Gagal menghapus turnamen. Silakan coba lagi.');
        }
    }

    public function jadwal(Request $request)
    {
        Tournament::create([
            'tanggalPenyisihan' => $request->input('tanggalPenyisihan'),
            'waktuPenyisihan' => $request->input('waktuPenyisihan'),
            'boPenyisihan' => $request->input('boPenyisihan'),
            'tanggalSemi' => $request->input('tanggalSemi'),
            'waktuSemi' => $request->input('waktuSemi'),
            'boSemi' => $request->input('boSemi'),
            'tanggalFinal' => $request->input('tanggalFinal'),
            'waktuFinal' => $request->input('waktuFinal'),
            'boFinal' => $request->input('boFinal'),
        ]);
        return redirect()->route('ptournament.index')->with('success', 'Jadwal added successfully');
    }

    public function juara(Request $request)
    {
        Tournament::create([
            'nama_juara1' => $request->input('nama_juara1'),
            'nama_juara2' => $request->input('nama_juara2'),
            'nama_juara3' => $request->input('nama_juara3'),
        ]);
        return redirect()->route('ptournament.index')->with('success', 'Jadwal added successfully');
    }
}
