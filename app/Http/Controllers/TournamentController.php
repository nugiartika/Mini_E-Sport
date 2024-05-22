<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Team;
use App\Models\User;
use App\Models\juara;
use App\Models\jadwal;
use App\Models\bracket;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\TeamTournament;
use App\Models\tournament_prize;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TournamentRequest;
use App\Models\prizepool;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', auth()->user()->id)->get();
        $counttournaments = $tournaments->count(); // Use the already fetched tournaments to count
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $categories = Category::all();
        $prizes = tournament_prize::all();

        return view('penyelenggara.tournament', compact(
            'counttournaments',
            'prizes',
            'tournaments',
            'categories',
            'user',
            'teamCounts',
            'teamIdCounts'
        ));
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
        $teams = Team::with('tournament')->where('user_id', auth()->id())->get();
        $teamTournament = TeamTournament::all();

        return view('user.tournamentUser', compact('tournaments', 'category', 'user', 'teamCounts', 'teams', 'teamIdCounts', 'teamTournament'));
    }

    public function dashboard()
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
        $prizes = tournament_prize::all();
        $tournaments = tournament::all();
        return view('penyelenggara.Dashboard', compact('counttournaments', 'prizes', 'tournaments', 'category', 'user', 'teamCounts', 'teamIdCounts'));
    }

    public function indexadmin(Request $request)
    {
        $query = Tournament::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('status', 'pending')
                ->where('name', 'LIKE', "%{$search}%");
        } else {
            $query->where('status', 'pending');
        }
        $tournaments = $query->paginate(5);

        $user = User::all();
        $category = Category::all();
        $prizes = tournament_prize::all();

        return view('admin.AccTournament', compact('tournaments', 'category', 'user', 'prizes'));
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
        $prizes = prizepool::all();
        $note = tournament_prize::all();
        return view('penyelenggara.tambah', compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
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
            $prizepoolId = $request->input('prizepool_id');
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
                }
                $description = $dom->saveHTML();
            }
            $user = Auth::user();

            // $description = $request->description;

            // if (!empty($description)) {
            //     $dom = new \DomDocument();
            //     $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            //     $images = $dom->getElementsByTagName('img');
            //     foreach ($images as $k => $img) {
            //         $data = $img->getAttribute('src');
            //         list($type, $data) = explode(';', $data);
            //         list(, $data) = explode(',', $data);
            //         $data = base64_decode($data);

            //         $image_name = "/uploads" . time() . $k . '.png';
            //         $path = public_path() . $image_name;
            //         file_put_contents($path, $data);
            //         $img->removeAttribute('src');
            //         $img->setAttribute('src', $image_name);
            //     }
            //     $description = $dom->saveHTML();
            // }

            // Proses gambar
            $gambar = $request->file('images');
            $path_gambar = null;

            if ($gambar) {
                $path_gambar = Storage::disk('public')->put('tournament', $gambar);
            }


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
                'description' => $description,
                'rule' => $request->input('rule'),
                'paidment' => $request->input('paidment'),
                'nominal' => $request->input('nominal'),
                'status' => 'pending',
                'aktif' => 'aktif'
            ]);
            $tournamentId = $tournament->id;


            foreach ($prizepoolId as $index => $value) {
                $note = $request->input('note')[$index];
                if (empty($note)) {
                    return redirect()->back()->with('error', 'Catatan harus diisi');
                }

                if (empty($value)) {
                    return redirect()->back()->with('error', 'Prizepool harus dipilih');
                }
                $tournamentPrize = Tournament_Prize::create([
                    'tournament_id' => $tournamentId,
                    'note' => $note,
                    'prizepool_id' => $value
                ]);
            }


            return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);

            // Tangani kesalahan
            // dd($e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        // $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $categories = Category::all();
        $selectedCategories = $request->input('categories_id', []);
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teams = Team::all();
        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();

        return view('penyelenggara.tournament', compact('tournaments', 'categories', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams', 'counttournaments', 'prizes'));
    }

    public function filteruser(Request $request)
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
        $teams = Team::all();
        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();

        return view('user.tournamentUser', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams'));
    }

    public function filterLanding(Request $request)
    {
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $selectedCategories = $request->input('categories_id', []);
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy()
            ->get();
        $teams = Team::all();
        $query = Tournament::query();
        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }
        $tournaments = $query->get();
        return view('user.index', compact('oldSearch', 'user', 'category', 'selectedCategories', 'teamCounts', 'teams', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }


    public function detailTournament(Tournament $tournament, $id)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $user = Auth::user();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        // dd($teamCounts);
        $category = Category::all();
        $jadwals = jadwal::all();
        $juaras = juara::all();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = team::all();
        $tournament = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();

        return view('penyelenggara.detailtournament', compact('tournament', 'counttournaments', 'teams', 'prizes', 'juaras', 'jadwals', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }

    public function bracket(Tournament $tournament, Request $request)
    {
        $request->validate([
            'urlBracket' => 'required',
        ], [
            'urlBracket.required' => 'bracket harus ada',
        ]);

        $tournament->update([
            'urlBracket' => $request->input('urlBracket'),
        ]);

        return redirect()->back()->with('error', 'Turnamen tidak ditemukan');
    }

    public function detailTournamentUser(Tournament $tournament, $id)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $user = Auth::user();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        // dd($teamCounts);
        $category = Category::all();
        $jadwal = jadwal::all();
        $juara = juara::all();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = team::all();
        $tournament = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();
        // dd($prizes);

        return view('user.detailtournament', compact('counttournaments', 'user', 'category', 'jadwal', 'juara', 'selectedTournament', 'teams', 'tournament', 'prizes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournaments = Tournament::find($id);
        $category = Category::all();
        $user = User::all();
        $prizes = tournament_prize::where('tournament_id', $id)->get();

        return view('admin.AccTournament', compact('tournaments', 'category', 'user', 'prizes'));
    }



    public function update(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,rejected',
            'reason' => 'required_if:status,rejected|nullable|string|max:255',
        ], [
            'status.required' => 'Kolom STATUS wajib diisi.',
            'status.in' => 'Status harus berupa "accepted" atau "rejected".',
            'reason.required_if' => 'Alasan penolakan wajib diisi.',
            'reason.string' => 'Alasan penolakan harus berupa teks.',
            'reason.max' => 'Alasan penolakan tidak boleh melebihi 255 karakter.',
        ]);

        // $tournament->status = $request->status;

        $tournament->status = $request->status;

        if ($request->status == 'rejected' && $request->has('reason')) {
            $tournamentData['reason'] = $request->reason;
        }

        $tournament->update($tournamentData);

        return redirect()->back()->with('success', 'Status turnamen berhasil diperbarui.');
    }



    public function edittour($id)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $tournament = Tournament::FindOrFail($id);
        $user = User::all();
        $category = Category::all();
        $prizes = prizepool::all();
        $note = tournament_prize::all();
        return view('penyelenggara.edit',  ['id' => $id], compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
    }

    public function updatetour(Tournament $tournament, Request $request, $id)
    {
        try {
            $tournament = Tournament::findOrFail($id);
            $prizepoolIds = $request->input('prizepool_id');
            $description = $request->input('description');
            $user = Auth::user();
            $id = $tournament->id;
            // Mengolah deskripsi untuk menyimpan gambar yang diunggah
            if (!empty($description)) {
                $dom = new \DomDocument();
                @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

                $images = $dom->getElementsByTagName('img');
                foreach ($images as $k => $img) {
                    $data = $img->getAttribute('src');
                    if (strpos($data, 'data:image') === 0) {
                        list($type, $data) = explode(';', $data);
                        list(, $data) = explode(',', $data);
                        $data = base64_decode($data);

                        $image_name = "/uploads/" . time() . $k . '.png';
                        $path = public_path() . $image_name;
                        file_put_contents($path, $data);
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $image_name);
                    }
                }
                $description = $dom->saveHTML();
            }

            // Proses gambar turnamen
            $gambar = $request->file('images');
            $path_gambar = $tournament->images; // Simpan path gambar sebelumnya jika tidak ada gambar baru

            if ($gambar) {
                $path_gambar = Storage::disk('public')->put('tournament', $gambar);
            }

            $status = $request->input('status', $tournament->status);
            $aktif = $request->input('aktif', $tournament->aktif);

            // Update turnamen
            $tournament->update([
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
                'description' => $description,
                'rule' => $request->input('rule'),
                'paidment' => $request->input('paidment'),
                'nominal' => $request->input('nominal'),
                'status' => $status,
                'aktif' => $aktif,
            ]);

            // Update prize pools
            foreach ($prizepoolIds as $index => $value) {
                $tournamentPrize = Tournament_prize::where('tournament_id', $id)->where('prizepool_id', $value)->first();
                if ($tournamentPrize) {
                    // Update existing prize pool entry
                    $tournamentPrize->update([
                        'note' => $request->input('note')[$index],
                        'prizepool_id' => $value
                    ]);
                } else {
                    // Create new prize pool entry if it doesn't exist
                    Tournament_Prize::create([
                        'tournament_id' => $id,
                        'note' => $request->input('note')[$index],
                        'prizepool_id' => $value
                    ]);
                }
            }
            return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil diedit');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function editStatus($id)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $tournament = Tournament::FindOrFail($id);
        $user = User::all();
        $category = Category::all();
        $prizes = prizepool::all();
        $note = tournament_prize::all();
        return view('penyelenggara.tournament',  ['id' => $id], compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
    }
    public function updateStatus(Request $request, $id)
    {
        try {
            $tournament = Tournament::findOrFail($id);
            $aktif = $request->input('aktif');

            // Update the 'aktif' column to "Aktif" or "Tidak Aktif"
            $tournament->aktif = $aktif;
            $tournament->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $ptournament)
    {
        try {
            if ($ptournament->images) {
                Storage::disk('public')->delete($ptournament->images);
            }
            $ptournament->delete();
            return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('ptournament.index')->with('error', 'Gagal menghapus turnamen. Silakan coba lagi.');
        }
    }
}
