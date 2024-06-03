<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Team;
use App\Models\User;
use App\Models\juara;
use App\Models\jadwal;
use App\Models\Category;
use App\Models\prizepool;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\TeamTournament;
use App\Models\tournament_prize;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Models\upload;
use Illuminate\Pagination\LengthAwarePaginator;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $acceptedUploads = Upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();

        // Apply the search filter and paginate the results
        $tournamentsQuery = Tournament::when($request->has('search'), function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->search . '%');
        });

        // Filter tournaments by the authenticated user
        $tournamentsQuery->where('users_id', $user->id);

        // Get the paginated results
        $tournaments = $tournamentsQuery->paginate(6);

        // Count the tournaments with 'rejected' status
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();

        // Get team counts grouped by tournament_id
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();

        // Get team tournament counts grouped by tournament_id
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();

        // Get all categories and prizes
        $categories = Category::all();
        $prizes = tournament_prize::all();

        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();

        // Count teams with accepted uploads
        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('team_id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');


        return view('penyelenggara.tournament', compact(
            'counttournaments',
            'prizes',
            'tournaments',
            'categories',
            'user',
            'teamCounts',
            'teamIdCounts',
            'acceptedUploads',
            'uploads',
            'uploadedTournamentIds',
            'uploadedTournamentteamIds',
            'acceptedTeamCounts',
            'acceptedTeamIdCounts'
        ));
    }


    public function notification()
    {
        $tournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->get();

        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();

        return view('penyelenggara.notification', compact('tournaments', 'counttournaments'));
    }

    public function Updatenotification($id)
    {
        $tours = Tournament::findOrFail($id)->update([
            'notif' => 'baca',
        ]);

        return redirect()->route('notificationTournament');
    }


    public function indexuser()
    {
        // $user = auth()->user();
    $user = User::all();

        $acceptedUploads = Upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();

        $tournaments = Tournament::all();
        $category = Category::all();
        $teams = Team::with('tournament')->where('user_id', auth()->id())->get();
        $teamuser = Team::where('user_id', auth()->id())->exists();
        $teamTournament = TeamTournament::all();
        $prizes = tournament_prize::all();
        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();

        // Count teams with accepted uploads
        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('team_id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        return view('user.tournamentUser', compact('prizes', 'tournaments', 'category', 'user', 'teams', 'teamuser', 'teamTournament', 'uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
    }



    public function dashboard()
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->get();
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        $tournamentacc = Tournament::where('users_id', auth()->user()->id)->where('status', 'accepted')->count();
        $tournamentrej = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $tournamentpend = Tournament::where('users_id', auth()->user()->id)->where('status', 'pending')->count();

        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $prizes = tournament_prize::all();
        $tournaments = tournament::where('users_id', auth()->user()->id)->get();
        // saldo penyelenggara
        // Ambil semua turnamen
        $tournamentss = Tournament::orderBy('id', 'desc')->get();

        // Ambil transaksi yang statusnya 'accepted' dan terkait dengan turnamen
        $acceptedUploads = Upload::where('status', 'accepted')
            ->whereIn('tournament_id', $tournamentss->pluck('id')->toArray())
            ->get();

        // Gabungkan hasil perhitungan jumlah tim dari kedua tabel
        $combinedCounts = DB::table(function ($query) {
            $query->select('tournament_id', DB::raw('COUNT(*) as count'))
                ->from('teams')
                ->groupBy('tournament_id')
                ->unionAll(
                    TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
                        ->groupBy('tournament_id')
                );
        }, 'combined_counts')
            ->select('tournament_id', DB::raw('SUM(count) as total_count'))
            ->groupBy('tournament_id')
            ->pluck('total_count', 'tournament_id');

        // Siapkan array hasil untuk dikirim ke view
        $result = [];
        $totalIncomeOrganizer = 0;
        $id_organizer = null;

        foreach ($tournamentss as $tournament) {
            // Periksa apakah turnamen ini memiliki accepted uploads
            $hasAcceptedUpload = $acceptedUploads->contains('tournament_id', $tournament->id);

            if ($hasAcceptedUpload) {
                $totalTeams = $combinedCounts->get($tournament->id, 0);
                $totalNominal = $totalTeams * $tournament->nominal;
                $incomeOrganizer = $totalNominal - ($totalNominal * 15 / 100);
                $totalIncomeOrganizer += $incomeOrganizer;
                $id_organizer = $tournament->users_id;

                $result[] = [
                    'tournament' => $tournament,
                    'total_teams' => $totalTeams,
                    'total_nominal' => $totalNominal,
                    'income_organizer' => $incomeOrganizer,
                    'id_organizer' => $id_organizer
                ];
            }
        }
        return view('penyelenggara.Dashboard', compact(
            'totalIncomeOrganizer',
            'tournamentpend',
            'tournamentrej',
            'tournamentacc',
            'counttournaments',
            'prizes',
            'tournamentss',
            'category',
            'user',
            'teamCounts',
            'teamIdCounts',
            'tournaments',
            'id_organizer'
        ));
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
    public function create(Request $request)
    {
        $selectedTournamentId = $request->input('tournament_id');

        if ($selectedTournamentId && !Tournament::where('id', $selectedTournamentId)->exists()) {
            return redirect()->back()->with('error', 'ID turnamen tidak valid.');
        }

        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        $tournament = Tournament::all();
        $user = User::all();
        $category = Category::all();
        $prizes = prizepool::all();
        $note = tournament_prize::all();

        return view('penyelenggara.tambah', compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
    }

    public function history()
    {
        $teams = Team::orderBy('id', 'desc')
            ->where('user_id', auth()->id())
            ->get();
        $uploads = upload::where('user_id', auth()->user()->id)->get();
        $uploadedTournamentIds = $uploads->pluck('tournament_id')->toArray();

        return view('user.historytournament', compact('teams', 'uploads', 'uploadedTournamentIds'));
    }

    public function indexIncome(Request $request)
    {
        // Ambil semua turnamen untuk menghitung total incomeAdmin
        $allTournaments = Tournament::orderBy('id', 'desc')
            ->where('status', 'accepted')
            ->where('paidment', 'Berbayar')
            ->when($request->has('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->get();

        // Ambil turnamen dengan pagination
        $tournaments = Tournament::orderBy('id', 'desc')
            ->where('status', 'accepted')
            ->where('paidment', 'Berbayar')
            ->when($request->has('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->get();

        // Ambil transaksi yang statusnya 'accepted' dan terkait dengan turnamen di result
        $acceptedUploads = Upload::where('status', 'accepted')
            ->whereIn('tournament_id', $tournaments->pluck('id')->toArray())
            ->paginate(5);

        //all accept
        $allAcceptedUploads = Upload::where('status', 'accepted')
            ->whereIn('tournament_id', $tournaments->pluck('id')->toArray())
            ->get();

        // Gabungkan hasil perhitungan jumlah tim dari kedua tabel
        $combinedCounts = DB::table(function ($query) {
            $query->select('tournament_id', DB::raw('COUNT(*) as count'))
                ->from('teams')
                ->groupBy('tournament_id')
                ->unionAll(
                    TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
                        ->groupBy('tournament_id')
                );
        }, 'combined_counts')
            ->select('tournament_id', DB::raw('SUM(count) as total_count'))
            ->groupBy('tournament_id')
            ->pluck('total_count', 'tournament_id');

        // Siapkan array hasil untuk dikirim ke view
        $result = [];
        $totalIncomeAdmin = 0;

        // Menghitung total incomeAdmin dari semua turnamen yang memenuhi syarat
        foreach ($allTournaments as $tournament) {
            $hasAcceptedUpload = $allAcceptedUploads->contains('tournament_id', $tournament->id);
            if ($hasAcceptedUpload) {
                $totalTeams = $combinedCounts->get($tournament->id, 0);
                $totalNominal = $totalTeams * $tournament->nominal;
                $incomeAdmin = $totalNominal * 15 / 100;
                $totalIncomeAdmin += $incomeAdmin;
            }
        }

        // Menyusun hasil untuk turnamen yang ada di halaman saat ini
        foreach ($tournaments as $tournament) {
            $hasAcceptedUpload = $acceptedUploads->contains('tournament_id', $tournament->id);

            if ($hasAcceptedUpload) {
                $totalTeams = $combinedCounts->get($tournament->id, 0);
                $totalNominal = $totalTeams * $tournament->nominal;
                $incomeAdmin = $totalNominal * 15 / 100;
                $biayaRegister = $tournament->nominal;

                $result[] = [
                    'tournament' => $tournament,
                    'total_teams' => $totalTeams,
                    'total_nominal' => $totalNominal,
                    'income_admin' => $incomeAdmin,
                    'biaya_register' => $biayaRegister,
                ];
            }
        }

        return view('admin.income', compact('result', 'tournaments', 'totalIncomeAdmin', 'acceptedUploads'));
    }
    public function organizerIncome(Request $request)
    {
        // Ambil semua turnamen untuk menghitung total incomeOrganizer
        $allTournaments = Tournament::orderBy('id', 'desc')
            ->where('users_id', auth()->user()->id)
            ->where('status', 'accepted')
            ->where('paidment', 'Berbayar')
            ->get();

        // Ambil turnamen dengan pagination
        $tournaments = Tournament::orderBy('id', 'desc')
            ->where('users_id', auth()->user()->id)
            ->where('status', 'accepted')
            ->where('paidment', 'Berbayar')
            ->when($request->has('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->get();

        // Ambil transaksi yang statusnya 'accepted' dan terkait dengan turnamen di result
        $acceptedUploads = Upload::where('status', 'accepted')
            ->whereIn('tournament_id', $tournaments->pluck('id')->toArray())
            ->paginate(5);

        //all accept
        $allAcceptedUploads = Upload::where('status', 'accepted')
            ->whereIn('tournament_id', $tournaments->pluck('id')->toArray())
            ->get();

        // Gabungkan hasil perhitungan jumlah tim dari kedua tabel
        $combinedCounts = DB::table(function ($query) {
            $query->select('tournament_id', DB::raw('COUNT(*) as count'))
                ->from('teams')
                ->groupBy('tournament_id')
                ->unionAll(
                    TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
                        ->groupBy('tournament_id')
                );
        }, 'combined_counts')
            ->select('tournament_id', DB::raw('SUM(count) as total_count'))
            ->groupBy('tournament_id')
            ->pluck('total_count', 'tournament_id');

        // Siapkan array hasil untuk dikirim ke view
        $result = [];
        $totalIncomeOrganizer = 0;
        $id_organizer = null;

        // Menghitung total incomeOrganizer dari semua turnamen yang memenuhi syarat
        foreach ($allTournaments as $tournament) {
            $hasAcceptedUpload = $allAcceptedUploads->contains('tournament_id', $tournament->id);
            if ($hasAcceptedUpload) {
                $totalTeams = $combinedCounts->get($tournament->id, 0);
                $totalNominal = $totalTeams * $tournament->nominal;
                $incomeOrganizer = $totalNominal - ($totalNominal * 15 / 100);
                $totalIncomeOrganizer += $incomeOrganizer;
            }
        }

        // Menyusun hasil untuk turnamen yang ada di halaman saat ini
        foreach ($tournaments as $tournament) {
            $hasAcceptedUpload = $acceptedUploads->contains('tournament_id', $tournament->id);

            if ($hasAcceptedUpload) {
                $totalTeams = $combinedCounts->get($tournament->id, 0);
                $totalNominal = $totalTeams * $tournament->nominal;
                $incomeOrganizer = $totalNominal - ($totalNominal * 15 / 100);
                $biayaRegister = $tournament->nominal;
                $id_organizer = $tournament->users_id;

                $result[] = [
                    'tournament' => $tournament,
                    'total_teams' => $totalTeams,
                    'total_nominal' => $totalNominal,
                    'income_organizer' => $incomeOrganizer,
                    'biaya_register' => $biayaRegister,
                    'id_organizer' => $id_organizer,
                ];
            }
        }

        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();

        return view('penyelenggara.income', compact('result', 'tournaments', 'counttournaments', 'totalIncomeOrganizer', 'id_organizer', 'acceptedUploads'));
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

            // Define validation rules
            $rules = [
                'note.*' => 'required',
                'prizepool_id.*' => 'required',
            ];

            // Define custom error messages
            $messages = [
                'note.*.required' => 'Catatan harus diisi',
                'prizepool_id.*.required' => 'Prizepool harus dipilih',
            ];

            // Validate the request
            $request->validate($rules, $messages);

            $tournamentId = $tournament->id;
            $prizepoolIds = $request->input('prizepool_id');
            $notes = $request->input('note');

            foreach ($prizepoolIds as $index => $value) {
                $note = $notes[$index];

                $tournamentPrize = Tournament_Prize::create([
                    'tournament_id' => $tournamentId, // Gunakan id turnamen yang baru dibuat
                    'note' => $note,
                    'prizepool_id' => $value
                ]);
            }



            return redirect()->route('ptournament.index')->with('success', 'Tournament berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function filter(Request $request)
    {
        $acceptedUploads = Upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();

        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
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


        $tournaments = $query->paginate(6);
        $prizes = tournament_prize::all();

        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();

        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('team_id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        return view('penyelenggara.tournament', compact('tournaments', 'categories', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams', 'counttournaments', 'prizes','acceptedUploads','uploads', 'uploadedTournamentIds','uploadedTournamentteamIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
    }

    public function filteruser(Request $request)
    {
        $acceptedUploads = Upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();

        $oldSearch = $request->input('search');
        $user = Auth::user();
        $category = Category::all();
        $selectedCategories = $request->input('categories_id', []);
        // $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
        //     ->groupBy('tournament_id')
        //     ->get();
        // $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
        //     ->groupBy('tournament_id')
        //     ->get();
        $teams = Team::all();
        $query = Tournament::query();
        $teamuser = Team::where('user_id', auth()->id())->exists();
        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();
        $prizes = tournament_prize::all();
        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();

        // Count teams with accepted uploads
        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

      $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('team_id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');
        return view('user.tournamentUser', compact('teamuser', 'tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teams', 'prizes','acceptedUploads','uploads', 'uploadedTournamentIds','uploadedTournamentteamIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
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
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        $user = Auth::user();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();

        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $jadwals = jadwal::where('tournament_id', $id)->get();
        $juaras = juara::where('tournament_id', $id)->get();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = Team::where('tournament_id', $id)->get();
        $teamtournament = TeamTournament::where('tournament_id', $id)->with('team')->get();
        $tournaments = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();

        return view('penyelenggara.detailtournament', compact('tournaments', 'tournaments', 'counttournaments', 'teams', 'prizes', 'juaras', 'jadwals', 'category', 'user', 'teamCounts', 'teamIdCounts', 'selectedTournament', 'teamtournament'));
    }

    public function bracket(Tournament $tournament, Request $request)
    {
        $request->validate([
            'urlBracket' => 'required|url',
        ], [
            'urlBracket.required' => 'bracket harus ada',
            'urlBracket.url' => 'Bracket harus berupa URL yang valid.',
        ]);

        $tournament->update([
            'urlBracket' => $request->input('urlBracket'),
        ]);

        return redirect()->back()->with('error', 'Turnamen tidak ditemukan');
    }


    public function detailTournamentUser(Tournament $tournament, $id)
    {
        $userId = Auth::id();
        $counttournaments = Tournament::where('users_id', $userId)->where('status', 'rejected')->count();
        $user = Auth::user();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $jadwals = jadwal::where('tournament_id', $id)->get();
        $juaras = juara::where('tournament_id', $id)->get();
        $selectedTournament = Tournament::findOrFail($id);
        $teams = Team::where('tournament_id', $id)->get();
        $teamtournament = TeamTournament::where('tournament_id', $id)->with('team')->get();

        $userTeamIds = Team::where('user_id', $userId)->pluck('id')->toArray();

        $teamtournamentId = TeamTournament::where('tournament_id', $id)
            ->whereIn('team_id', $userTeamIds)
            ->exists();

        $userTeamInTournament = Team::where('tournament_id', $id)
            ->where('user_id', $userId)
            ->exists();

        $tournament = Tournament::find($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();

        return view('user.detailtournament', compact('teamIdCounts', 'teamCounts', 'counttournaments', 'user', 'category', 'jadwals', 'juaras', 'selectedTournament', 'teams', 'teamtournament', 'teamtournamentId', 'tournament', 'prizes', 'userTeamInTournament'));
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
            $tournament->reason = $request->reason;
        }

        $tournament->save();

        return redirect()->back()->with('success', 'Status turnamen berhasil diperbarui.');
    }



    public function edittour($id)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        $tournament = Tournament::FindOrFail($id);
        $user = User::all();
        $category = Category::all();
        $prizes = prizepool::all();
        $note = tournament_prize::all();
        return view('penyelenggara.edit',  ['id' => $id], compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
    }

    public function updatetour(Tournament $tournament, UpdateTournamentRequest $request, $id)
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
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();
        $tournament = Tournament::FindOrFail($id);
        $user = User::all();
        $category = Category::all();
        $prizes = prizepool::all();
        $note = tournament_prize::all();
        return view('penyelenggara.tournament',  ['id' => $id], compact('counttournaments', 'note', 'prizes', 'tournament', 'category', 'user'));
    }

    public function updateStatus(Request $request, $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->aktif = $request->input('status');
        $tournament->save();
        return redirect()->back()->with('success', 'Tournament berhasil diedit');
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
