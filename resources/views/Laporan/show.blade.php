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
                    <div class="form-group">
                        <label class="form-label">NAMA KARYAWAN</label>
                        <input type="text" name="nama_karyawan" value="{{ $laporan->karyawan->nama_karyawan }}" class="form-control @error('nama_karyawan') is-invalid @enderror" id="Nama-Karyawan" >
                                @error('Nama-Karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">JABATAN</label>
                        <input type="text" name="jabatan" value="{{ $laporan->karyawan->jabatan->nama_jabatan }}" class="form-control @error('jabatan') is-invalid @enderror" id="Jabatan" >
                                @error('Jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">STATUS KERJA</label>
                        <input type="text" name="status" value="{{ $laporan->karyawan->status->jenis_status }}" class="form-control @error('status') is-invalid @enderror" id="status" >
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
                                    <input type="text" name="lama_kerja" value="{{ $laporan->karyawan->lama_kerja }} TAHUN" class="form-control @error('lama_kerja') is-invalid @enderror" id="lama_kerja" >
                                </div>
                                <div class="col-md-10">
                                    <label class="form-label">BONUS LAMA KERJA</label>
                                    <input type="text" name="bonus_lama_kerja" value="Rp. {{ number_format($laporan->bonus_lama_kerja,0,'.','.') }}" class="form-control @error('lama_kerjaa') is-invalid @enderror" id="lama_kerjaa" >
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
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="form-label">HARI IZIN</label>
                            <div>
                                    <input type="number" name="hari_izin" value="{{ $laporan->hari_izin }}" class="form-control @error('hari_izin') is-invalid @enderror" id="hari_izin" >
                            </div>
                                @error('hari_izin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="form-label">HARI SAKIT</label>
                            <div>
                                    <input type="number" name="hari_sakit" value="{{ $laporan->hari_sakit }}" class="form-control @error('hari_sakit') is-invalid @enderror" id="hari_sakit" >
                            </div>
                                @error('hari_sakit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="form-label">HARI ALFA</label>
                            <div>
                                    <input type="number" name="hari_alfa" value="{{ $laporan->hari_alfa }}" class="form-control @error('hari_alfa') is-invalid @enderror" id="hari_alfa" >
                            </div>
                                @error('hari_alfa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                          <label class="form-label">HARI KERJA</label>
                          <div>
                                  <input type="number" name="hari_kerja" value="{{ $laporan->hari_kerja }}" class="form-control @error('hari_kerja') is-invalid @enderror" id="hari_kerja" >
                          </div>
                              @error('hari_kerja')
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
                                <input type="text" name="asuransi" value="Rp. {{ number_format($laporan->asuransi,0,'.','.')}}" class="form-control @error('asuransi') is-invalid @enderror" id="asuransi" >
                        </div>
                                @error('asuransi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                      <label class="form-label">TOTAL GAJI</label>
                      <div>
                              <input type="text" name="total_gaji" value="Rp. {{  number_format($laporan->total_gaji,0,'.','.')   }}" class="form-control @error('total_gaji') is-invalid @enderror" id="total_gaji" >
                      </div>
                              @error('total_gaji')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                  </div>
                    <div class="form-group">
                      <label class="form-label">STATUS KERJA</label>
                              <select class="form-control @error('id_status') is-invalid @enderror" name="id_status">
                                <option value="{{ $laporan->id }}" >{{ $laporan->status }}</option>
                              </select>
                              @error('id_status')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                    </div>
                    <a href="{{ route('laporan.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
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
