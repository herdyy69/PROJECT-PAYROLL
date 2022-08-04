<?php

namespace App\Http\Controllers;
use App\Models\status;
use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        $status = status::all();
        return view('status', compact('status'));
    }
   
   
}
