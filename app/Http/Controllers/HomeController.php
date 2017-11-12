<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\Event;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function gmaps()
    {
        Mapper::map(49.9935, 36.230383);

        $events = Event::latest()->get();
        $best_helpers = User::latest()->get();


        return view('gmaps', compact('events', 'best_helpers'));
    }
}
