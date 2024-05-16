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
        return view('penyelenggara.tournament', compact('counttournaments', 'prizes', 'tournaments', 'category', 'user', 'teamCounts', 'teamIdCounts'));
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
            // Tangani kesalahan
            // dd($e->getMessage());
        }
    }

    public function filter(Request $request)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
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

        return view('penyelenggara.tournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams'));
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
        $jadwal = jadwal::all();
        $bracket = bracket::all();
        $juara = juara::all();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = team::all();
        $tournament = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();


        return view('penyelenggara.detailtournament', compact('tournament', 'counttournaments', 'teams', 'prizes', 'juara', 'bracket', 'jadwal', 'category', 'user', 'teamCounts', 'selectedTournament'));
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
        $bracket = bracket::all();
        $juara = juara::all();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = team::all();
        $tournament = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();
        // dd($prizes);

        return view('user.detailtournament', compact('counttournaments', 'user', 'category', 'jadwal', 'bracket', 'juara', 'selectedTournament', 'teams', 'tournament', 'prizes'));
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
            $tournament = Tournament::find($id);
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

            // Update turnamen
            $tournament = Tournament::findOrFail($id);
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
                'status' => 'pending',
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

            return redirect()->route('tournament.index')->with('success', 'Tournament berhasil diedit');
        } catch (\Exception $e) {
            // Tangani kesalahan
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $ptournament)
    {
        $ptournament->delete();
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
