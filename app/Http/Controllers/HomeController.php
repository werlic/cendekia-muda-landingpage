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

    // Unit/Department Methods
    public function paud()
    {
        return view('pages.landingpage.paud');
    }

    public function sd()
    {
        return view('pages.landingpage.sd');
    }

    public function smp()
    {
        return view('pages.landingpage.smp');
    }

    public function sma()
    {
        return view('pages.landingpage.sma');
    }

    public function alumniPrestasi()
    {
        return view('pages.landingpage.alumni-prestasi');
    }

    public function kontak()
    {
        return view('pages.landingpage.kontak');
    }
}
