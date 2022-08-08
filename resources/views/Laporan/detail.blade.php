@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">BUAT LAPORAN</h4>
                    </div>
                  <div class="card-body">
                    <form action="{{ route('laporan.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_karyawan" value="{{ $karyawan->id }}">
                    <input type="hidden" name="value_js" value="{{ $value_js = $karyawan->jabatan->gaji_pokok + $karyawan->jabatan->uang_makan + $karyawan->jabatan->uang_transportasi + $karyawan->jabatan->bonus_jabatan + $karyawan->status->bonus_status }}">
                    <input type="hidden" name="tanggal_penggajian" value="{{ $date_now = date('Y-m-d') }}">
                    {{-- jumlah hari dalam satu bulan --}}
                    <input type="hidden" name="hari_kerja" value="{{ $jumlah_hari = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')) }}">
                    {{-- jumlah hari dalam satu bulan --}}
                    <div class="form-group">
                        <label class="form-label">NAMA KARYAWAN</label>
                        <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" class="form-control @error('nama_karyawan') is-invalid @enderror" id="Nama-Karyawan" >
                                @error('Nama-Karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">JABATAN</label>
                        <input type="text" name="jabatan" value="{{ $karyawan->jabatan->nama_jabatan }}" class="form-control @error('jabatan') is-invalid @enderror" id="Jabatan" >
                                @error('Jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">STATUS KERJA</label>
                        <input type="text" name="status" value="{{ $karyawan->status->jenis_status }}" class="form-control @error('status') is-invalid @enderror" id="status" >
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">LAMA KERJA</label>
                                    <input type="text" name="lama_kerja" value="{{ $karyawan->lama_kerja }} TAHUN" class="form-control @error('lama_kerja') is-invalid @enderror" id="lama_kerja" >
                                </div>
                                <div class="col-md-10">
                                    <label class="form-label">BONUS LAMA KERJA</label>
                                    <input type="number" name="bonus_lama_kerja" value="" class="form-control @error('lama_kerjaa') is-invalid @enderror" id="lama_kerjaa" >
                                 @error('lama_kerjaa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="form-label">HARI IZIN</label>
                            <div>
                                    <input type="number" name="hari_izin" value="" class="form-control @error('hari_izin') is-invalid @enderror" id="hari_izin" >
                            </div>
                                @error('hari_izin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="form-label">HARI SAKIT</label>
                            <div>
                                    <input type="number" name="hari_sakit" value="" class="form-control @error('hari_sakit') is-invalid @enderror" id="hari_sakit" >
                            </div>
                                @error('hari_sakit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="form-label">HARI ALFA</label>
                            <div>
                                    <input type="number" name="hari_alfa" value="" class="form-control @error('hari_alfa') is-invalid @enderror" id="hari_alfa" >
                            </div>
                                @error('hari_alfa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">ASURANSI</label>
                        <div>
                                <input type="number" name="asuransi" value="" class="form-control @error('asuransi') is-invalid @enderror" id="asuransi" >
                        </div>
                                @error('asuransi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">STATUS</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="SUKSES">SUKSES</option>
                                    <option value="GAGAL">GAGAL</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">SIMPAN</button>
                    <a href="{{ route('laporan.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
                    </form>
                  </div>
                </div>
              </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        @endsection 
    </div>
</div>
