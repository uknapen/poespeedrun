<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Run;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{

    private function stock(Run $running = Null, $pages = 10, $recent = 5)
    {
        $runs = Run::sortable('time')->filter(request(['category', 'filtre']))->paginate($pages);

        foreach ($runs as $run) {
            $createdAt = Carbon::parse($run->dateCreate);
            $timeSpend = $createdAt->diffForHumans();
            $run->date = $timeSpend;
            $run->time = Carbon::parse($run->time)->format('H\h i\m s\s');
        }

        $recent_runs = Run::latest()->paginate($recent);
        foreach ($recent_runs as $run) {
            $createdAt = Carbon::parse($run->dateCreate);
            $timeSpend = $createdAt->diffForHumans();
            $run->date = $timeSpend;
            $run->time = Carbon::parse($run->time)->format('H\h i\m s\s');
        }
        $totalTimes = Carbon::parse('0000-00-00 00:00:00');
        foreach (Run::all() as $run) {
            $timetemp = Carbon::parse($run->time);
            $totalTimes->addHours($timetemp->hour)->addMinutes($timetemp->minute)->addSeconds($timetemp->second);
        }

        $totalTimes = Carbon::parse($totalTimes)->format('d\d H\h i\m s\s');

        if (isset($running)) {
            $running->time = Carbon::parse($running->time)->format('H\h i\m s\s');
            $runningcreatedAt = Carbon::parse($running->dateCreate);
            $runningtimeSpend = $runningcreatedAt->diffForHumans();
            $running->date = $runningtimeSpend;
        }

        return [
            'run' => $running,
            'runs' => $runs,
            'recent_runs' => $recent_runs,
            'totalTimes' => $totalTimes,
            'totalUser' => User::count(),
            'totalRun' => Run::count(),

        ];
    }

    private function calcTime($timeH, $timeM, $timeS)
    {
        $times = Carbon::parse("0000-00-00 $timeH:$timeM:$timeS");
        return $times;
    }

    public function index()
    {
        return view('pages.index', $this->stock());
    }
    public function all_runs()
    {
        return view('pages.all_runs', $this->stock(Null, 100));
    }

    public function show(Run $run)
    {

        return view('pages.show', array_merge($this->stock($run)));
    }

    public function create()
    {
        return view('pages.create', $this->stock());
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'category' => 'required',
            'version' => 'required',
            'class' => 'required',
            'timeH' => 'required',
            'timeM' => 'required',
            'timeS' => 'required',
            'url' => 'required|url',
            'archetype' => 'required',
            'deathless' => 'required',
            'comment' => 'nullable'
        ]);

        $formFields['time'] = $this->calcTime($formFields['timeH'], $formFields['timeM'], $formFields['timeS']);

        $formFields['user_id'] = auth()->id();
        $formFields['player'] = User::find($formFields['user_id'])->name;
        $formFields['dateCreate'] = Carbon::now();
        $url = $formFields['url'];
        $videoId = substr($url, strpos($url, "=") + 1);
        $formFields['url'] = "https://www.youtube.com/embed/$videoId?si=seq_8MOpYAFnctO8";

        Run::create($formFields);

        return redirect('/');
        // return redirect('/')->with('success', 'Listing created successfully!');
    }
}
