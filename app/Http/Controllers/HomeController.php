<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $homes = Home::all();
        return view('home', compact('homes'));
    }
}
