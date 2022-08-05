<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status;
use App\Models\karyawan;
use App\Models\jabatan;
use App\Models\laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = status::all();
        $karyawan = karyawan::all();
        $jabatan = jabatan::all();
        $laporan = laporan::all();
        return view('laporan.index', compact('status', 'karyawan', 'jabatan', 'laporan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = status::all();
        $karyawan = karyawan::all();
        $jabatan = jabatan::all();
        $laporan = laporan::all();
        return view('laporan.create', compact('status', 'karyawan', 'jabatan', 'laporan'));
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
            'id_karyawan' => 'required',
            'bonus_lama_kerja' => 'required',
            'hari_izin' => 'required',
            'hari_sakit' => 'required',
            'hari_alfa' => 'required',
            'asuransi' => 'required',
            'tanggal_penggajian' => 'required',
            'status' => 'required',
        ]);

        // if hari alfa
        if ($request->hari_alfa > 0 && $request->hari_alfa < 2) {
            $potongan_alfa = 100000;
        } elseif ($request->hari_alfa > 1 && $request->hari_alfa < 3) {
            $potongan_alfa = 150000;
        } elseif ($request->hari_alfa > 2 && $request->hari_alfa < 4) {
            $potongan_alfa = 200000;
        } elseif ($request->hari_alfa > 3 && $request->hari_alfa < 5) {
            $potongan_alfa = 250000;
        } elseif ($request->hari_alfa > 4 && $request->hari_alfa < 6) {
            $potongan_alfa = 300000;
        } elseif ($request->hari_alfa > 5 && $request->hari_alfa < 7) {
            $potongan_alfa = 350000;
        } else {
            $potongan_alfa = 0;
        }
        $value_js = $request->value_js;
        $laporan = new laporan();
        $laporan->id_karyawan = $request->id_karyawan;
        $laporan->bonus_lama_kerja = $request->bonus_lama_kerja;
        $laporan->hari_izin = $request->hari_izin;
        $laporan->hari_sakit = $request->hari_sakit;
        $laporan->hari_alfa = $request->hari_alfa;
        $laporan->hari_kerja = $request->hari_kerja - $request->hari_izin - $request->hari_sakit - $request->hari_alfa;
        $laporan->asuransi = $request->asuransi;
        $laporan->total_gaji = $request->total_gaji + $request->bonus_lama_kerja + $value_js - $potongan_alfa - $request->asuransi;
        $laporan->tanggal_penggajian = $request->tanggal_penggajian;
        $laporan->status = $request->status;
        $laporan->save();
        return redirect()->route('laporan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $jabatan = jabatan::all();
        $status = status::all();
        return view('laporan.detail', compact('karyawan', 'jabatan', 'status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showJoin($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $jabatan = jabatan::all();
        $status = status::all();
        return view('laporan.show', compact('karyawan', 'jabatan', 'status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_s($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $jabatan = jabatan::all();
        $status = status::all();
        return view('laporan.detail', compact('karyawan', 'jabatan', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan = laporan::findOrFail($id);
        return view('laporan.edit', compact('laporan'));
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
            'id_karyawan' => 'required',
            'bonus_lama_kerja' => 'required',
            'hari_izin' => 'required',
            'hari_sakit' => 'required',
            'hari_alfa' => 'required',
            'hari_kerja' => 'required',
            'asuransi' => 'required',
            'total_gaji' => 'required',
            'tanggal_penggajian' => 'required',
            'status' => 'required',
        ]);

        $laporan = laporan::findOrFail($id);
        $laporan->id_karyawan = $request->id_karyawan;
        $laporan->bonus_lama_kerja = $request->bonus_lama_kerja;
        $laporan->hari_izin = $request->hari_izin;
        $laporan->hari_sakit = $request->hari_sakit;
        $laporan->hari_alfa = $request->hari_alfa;
        $laporan->hari_kerja = $request->hari_kerja;
        $laporan->asuransi = $request->asuransi;
        $laporan->total_gaji = $request->total_gaji;
        $laporan->tanggal_penggajian = $request->tanggal_penggajian;
        $laporan->status = $request->status;
        $laporan->save();
        return redirect()->route('laporan.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = laporan::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
