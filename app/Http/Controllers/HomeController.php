<?php

namespace App\Http\Controllers;

use App\Hackerium;

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
        $latestHackeria = Hackerium::latest()->take(2)->get();
        return view('home', compact('latestHackeria'));
    }
}
