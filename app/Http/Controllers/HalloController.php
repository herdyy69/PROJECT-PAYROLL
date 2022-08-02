<?php

namespace App\Http\Controllers;
use App\Models\status;
use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function Getindex()
    {
        $status = status::all();
        return view('status.index', compact('status'));
    }
}
