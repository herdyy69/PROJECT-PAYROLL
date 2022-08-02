<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Models\karyawan;
use App\Models\status;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Carbon;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $tahun = "hallo";
        $karyawan = karyawan::all();
        return view('Karyawan.index', compact('karyawan', 'tahun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = jabatan::all();
        $status = status::all();
        $admin = User::all();
        return view('karyawan.create', compact('jabatan', 'status', 'admin'));
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
            'id_admin' => 'required',
            'nik' => 'required',
            'nama_karyawan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_masuk' => 'required',
            'id_jabatan' => 'required',
            'id_status' => 'required',
        ]);

        $karyawan = new karyawan();
        $karyawan->id_admin = $request->id_admin;
        $karyawan->nik = $request->nik;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->agama = $request->agama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_telepon = $request->no_telepon;
        $karyawan->tanggal_masuk = $request->tanggal_masuk;
        $awal =  new DateTime($request->tanggal_masuk);
        $akhir = new DateTime(date('Y-m-d'));
        $karyawan->lama_kerja = $awal->diff($akhir)->y;
        $karyawan->id_jabatan = $request->id_jabatan;
        $karyawan->id_status = $request->id_status;
        $karyawan->save();
        return redirect()->route('karyawan.index')
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
        $karyawan = karyawan::findOrFail($id);
        $jabatan = jabatan::all();
        $status = status::all();
        $admin = User::all();
        return view('karyawan.show', compact('karyawan','jabatan', 'status', 'admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $jabatan = jabatan::all();
        $status = status::all();
        $admin = User::all();
        return view('karyawan.edit', compact('karyawan', 'jabatan', 'status', 'admin'));
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
            'id_admin' => 'required',
            'nik' => 'required',
            'nama_karyawan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tanggal_masuk' => 'required',
            'id_jabatan' => 'required',
            'id_status' => 'required',
        ]);

        $karyawan = karyawan::findOrFail($id);
        $karyawan->id_admin = $request->id_admin;
        $karyawan->nik = $request->nik;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->agama = $request->agama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_telepon = $request->no_telepon;
        $karyawan->tanggal_masuk = $request->tanggal_masuk;
        $karyawan->id_jabatan = $request->id_jabatan;
        $karyawan->id_status = $request->id_status;
        $karyawan->save();
        return redirect()->route('karyawan.index')
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
        $karyawan = karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
