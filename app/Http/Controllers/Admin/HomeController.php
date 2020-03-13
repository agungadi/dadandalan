<?php

namespace App\Http\Controllers\Admin;

use App\Pengguna;
use App\Jalan;
use App\Jembatan;




class HomeController
{
    public function index()
    {
        $pengguna = Pengguna::get();
        $jalan = Jalan::get();
        $jembatan = Jembatan::get();

        return view('home', compact('pengguna','jalan','jembatan'));
    }
}
