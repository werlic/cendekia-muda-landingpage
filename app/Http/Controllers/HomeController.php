<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function facility()
    {
        return view('pages.landingpage.facility');
    }

    public function visiMisi()
    {
        return view('pages.landingpage.visi_misi');
    }

    public function history()
    {
        return view('pages.landingpage.history');
    }
}
