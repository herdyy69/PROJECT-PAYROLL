@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">TAMBAH DATA KARYAWAN</h4>
                    </div>
                  <div class="card-body">
                    <form action="{{ route('karyawan.store') }}" method="post">
                    @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id_admin" id="">
                      <div class="form-group">
                        <label for="nik" class="col-form-label">NIK</label>
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" >
                          @error('nik')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label for="nama_karyawan" class="col-form-label">NAMA KARYAWAN</label>
                        <input type="text" name="nama_karyawan" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan" >
                          @error('nama_karyawan', )
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label for="tempat_lahir" class="col-form-label">TEMPAT LAHIR</label>
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" >
                          @error('tempat_lahir')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="tanggal_lahir" class="col-form-label">TANGGAL LAHIR</label>
                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" >
                          @error('tanggal_lahir')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label class="form-label">JENIS KELAMIN</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>

                      <div class="form-group">
                        <label class="form-label">AGAMA</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                          <label for="alamat" class="col-form-label">ALAMAT</label>
                          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" >
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="no_telepon" class="col-form-label">NOMER TELEPON</label>
                          <input type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" >
                            @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="tanggal_masuk" class="col-form-label">TANGGAL MASUK</label>
                          <input type="date" name="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" >
                            @error('tanggal_masuk')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label class="form-label">JABATAN</label>
                                  <select class="form-control @error('id_jabatan') is-invalid @enderror" name="id_jabatan">
                                      {{-- apabila tidak ada data makan akan tampil tidak ada data --}}
                                      @if ($jabatan->count() == 0)
                                          <option value="">Tidak Ada Data</option>
                                      @else
                                          @foreach ($jabatan as $data)
                                              <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                          @endforeach
                                      @endif
                                  </select>
                                  @error('id_jabatan')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                        </div>

                        <div class="form-group">
                          <label class="form-label">STATUS KERJA</label>
                                  <select class="form-control @error('id_status') is-invalid @enderror" name="id_status">
                                    {{-- apabila tidak ada data makan akan tampil tidak ada data --}}
                                    @if ($status->count() == 0)
                                    <option value="">Tidak Ada Data</option>
                                    @else
                                    @foreach ($status as $data)
                                    <option value="{{ $data->id }}">{{ $data->jenis_status }}</option>
                                    @endforeach
                                    @endif
                                   
                                  </select>
                                  @error('id_status')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                        </div>
                      
                      <button type="submit" class="btn btn-primary me-2">SIMPAN</button>
                      <a href="{{ route('status.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
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
