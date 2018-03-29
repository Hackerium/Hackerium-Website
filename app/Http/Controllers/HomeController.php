<?php

namespace App\Http\Controllers;

use App\Repositories\HackeriumRepo;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closedHackeria = (new HackeriumRepo)->getClosedHackeria(5);
        $openHackeria = (new HackeriumRepo)->getOpenHackeria(5);

        return view('home', [
            'closedhackeria' => $closedHackeria,
            'openhackeria' => $openHackeria
        ]);
    }
}
