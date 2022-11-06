<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function berita()
    {
        return view('berita');
    }

    public function pengumuman()
    {
        return view('pengumuman');
    }
}
