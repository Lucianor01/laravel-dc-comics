<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;

class HomeController extends Controller
{
    public function getHome()
    {
        $comics = Comics::All();

        return view('pages.home', compact('comics'));
    }
}
