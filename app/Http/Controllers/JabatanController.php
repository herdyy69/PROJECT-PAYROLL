<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = jabatan::all();
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jabatan' => 'required',
            'gaji_pokok' => 'required',
            'uang_makan' => 'required',
            'uang_transportasi' => 'required',
            'bonus_jabatan' => 'required',
        ]);

        $jabatan = new jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->uang_makan = $request->uang_makan;
        $jabatan->uang_transportasi = $request->uang_transportasi;
        $jabatan->bonus_jabatan = $request->bonus_jabatan;
        $jabatan->save();
        return redirect()->route('jabatan.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = jabatan::findOrFail($id);
        return view('jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_jabatan' => 'required',
            'gaji_pokok' => 'required',
            'uang_makan' => 'required',
            'uang_transportasi' => 'required',
            'bonus_jabatan' => 'required',
        ]);

        $jabatan = jabatan::findOrFail($id);
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->uang_makan = $request->uang_makan;
        $jabatan->uang_transportasi = $request->uang_transportasi;
        $jabatan->bonus_jabatan = $request->bonus_jabatan;
        $jabatan->save();
        return redirect()->route('jabatan.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('jabatan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
