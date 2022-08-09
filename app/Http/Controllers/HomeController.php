<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Models\laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        $laporan = Laporan::all();
        return view('home', compact('karyawan', 'laporan'));
    }
}
