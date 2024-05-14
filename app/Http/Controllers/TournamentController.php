<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\tournament_prize;
use App\Models\User;
use App\Models\jadwal;
use App\Models\member;
use App\Models\bracket;
use App\Models\Category;
use App\Models\prizepool;
use App\Models\Tournament;
use DOMDocument;
use Illuminate\Http\Request;
use App\Models\TeamTournament;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TournamentRequest;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->get();
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        return view('penyelenggara.tournament', compact('tournaments', 'counttournaments','category', 'user', 'teamCounts', 'teamIdCounts'));
    }

    public function notification()
    {
        $tournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->get();
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();

        return view('penyelenggara.notification', compact('tournaments', 'counttournaments'));
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
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $tournaments = Tournament::where('status', 'accepted')->get();
        $user = User::all();
        $category = Category::all();
        return view('penyelenggara.Dashboard', compact('tournaments', 'category', 'user', 'counttournaments'));
    }

    public function indexadmin()
    {
        $tournaments = Tournament::where('status', 'pending')->get();
        $user = User::all();
        $category = Category::all();
        return view('admin.AccTournament', compact('tournaments', 'category', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $tournament = Tournament::all();
        $user = User::all();
        $category = Category::all();
        // $prize = prizepool::all();
        // $note = tournament_prize::all();
        return view('penyelenggara.tambah', compact('tournament', 'counttournaments', 'category', 'user'));
    }

    public function history()
    {
        $teams = Auth::user()->team;

        return view('user.historytournament', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TournamentRequest $request)
    {
        try {

            $description = $request->description;

            if (!empty($description)) {
                $dom = new \DomDocument();
                $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

                $images = $dom->getElementsByTagName('img');
                foreach ($images as $k => $img) {
                    $data = $img->getAttribute('src');
                    list($type, $data) = explode(';', $data);
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);

                    $image_name = "/uploads" . time() . $k . '.png';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);

                    // $image_name = "uploads/" . time() . $k . '.png';
                    // Storage::put($image_name, $data);

                    // $img->removeAttribute('src');
                    // $img->setAttribute('src', Storage::url($image_name));
                }
                $description = $dom->saveHTML();
            }
            $user = Auth::user();
            // Proses gambar
            $gambar = $request->file('images');
            $path_gambar = null;

            if ($gambar) {
                $path_gambar = Storage::disk('public')->put('tournament', $gambar);
            }

            Tournament::create([
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
            dd($e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $category = Category::all();
        $selectedCategories = $request->input('categories_id', []);

        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();

        return view('penyelenggara.tournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

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
        $jadwal = jadwal::all();
        $bracket = bracket::all();

        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('bracket', 'jadwal', 'tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournaments = Tournament::find($id);
        $category = Category::all();
        $user = User::all();
        return view('admin.AccTournament', compact('tournaments', 'category', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $tournament = Tournament::findOrFail($id);

    //     $request->validate([
    //         'status' => 'required|in:accepted,rejected',
    //     ], [
    //         'status.required' => 'Kolom STATUS wajib diisi.',
    //         'status.in' => 'Status harus berupa "accepted" atau "rejected".',
    //     ]);

    //     $status = $request->input('status');

    //     $data = [
    //         'status' => $status,
    //     ];

    //     $tournament->update($data);

    //     if ($status === 'rejected') {
    //         // $tournament->delete();
    //         return redirect()->route('konfirmtournament')->with('success', 'Turnamen berhasil dihapus.');
    //     } elseif ($status === 'accepted'){
    //         // $tournament->delete();
    //         return redirect()->route('konfirmtournament')->with('success', 'Turnamen berhasil dihapus.');
    //     }

    //     return redirect()->back()->with('error', 'Gagal memperbarui status turnamen.');
    // }

    public function update(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,rejected',
            'reason' => 'nullable|string|max:255',
        ], [
            'status.required' => 'Kolom STATUS wajib diisi.',
            'status.in' => 'Status harus berupa "accepted" atau "rejected".',
            // 'reason.required' => 'Alasan penolakan wajib diisi jika status "rejected".',
            'reason.string' => 'Alasan penolakan harus berupa teks.',
            'reason.max' => 'Alasan penolakan tidak boleh melebihi 255 karakter.',
        ]);

        $tournament->status = $request->status;

        // Update status turnamen sesuai dengan input dari form
        $tournament->status = $request->status;

        // Jika status adalah 'rejected' dan alasan telah diberikan, simpan alasan
        if ($request->status == 'rejected' && $request->has('reason')) {
            $tournament->reason = $request->reason;
        }

        // Simpan perubahan pada data turnamen
        $tournament->save();

        return redirect()->back()->with('success', 'Status turnamen berhasil diperbarui.');
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
}
