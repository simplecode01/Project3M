<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home.home', [

            // 'clients' => DB::table('clients')->take(3)->get(),
            // 'teams' => DB::table('teams')->take(3)->get(),
            // 'home' => Page::where('id', 10)->get(),
            // 'team' => Page::where('id', 3)->get(),
            // 'client' => Page::where('id', 4)->get(),
            // 'title' => 'Home'
        ]);
    }
}
