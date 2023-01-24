<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $now  = Carbon::now()->format('Y-m-d');
        $now_playing=DB::table('cinema_movie')->where('date',$now)->pluck('movie_id');
        $now_playing=Movie::find($now_playing);
        return view('home',compact('now_playing'));
    }
}
