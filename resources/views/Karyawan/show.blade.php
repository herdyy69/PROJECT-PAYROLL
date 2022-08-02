@extends('layouts.admin')

@section('content')
<style>
</style>
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mt-4">Edit Data Karyawan</h4>
                </div>
              <div class="card-body" >
                <input type="hidden" value="{{ Auth::user()->id }}" name="id_admin" id="">
                  <div class="form-group">
                    <label for="nik" class="col-form-label">NIK</label>
                    <input style="background-color: #000000;" disabled  type="text" name="nik" value="{{ $karyawan->nik }}" class="form-control @error('nik') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                    </div>
                    <div class="form-group">
                    <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                    <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" class="form-control @error('nama_karyawan') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('nama_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                    </div>
                    <div class="form-group">
                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="{{ $karyawan->tempat_lahir }}" class="form-control @error('tempat_lahir') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                    </div>
                    <div class="form-group">
                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">jenis_kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Laki-Laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label">Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Islam" {{ $karyawan->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $karyawan->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Hindu" {{ $karyawan->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ $karyawan->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ $karyawan->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input type="text" name="alamat" value="{{ $karyawan->alamat }}" class="form-control @error('alamat') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                        </div>
                        <div class="form-group">
                        <label for="no_telepon" class="col-form-label">No HP</label>
                        <input type="text" name="no_telepon" value="{{ $karyawan->no_telepon }}" class="form-control @error('no_telepon') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                        </div>
                        <div class="form-group"> 
                            {{-- tanggal masuk --}}
                            <label for="tanggal_masuk" class="col-form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="Nama-Karyawan" >
                                    @error('tanggal_masuk')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            {{-- end tanggal masuk --}}
                        </div>
                        <div class="form-group">
                            <label class="form-label">id_jabatan</label>
                                    <select class="form-control @error('id_jabatan') is-invalid @enderror" name="id_jabatan">
                                      @foreach ($jabatan as $data)
                                      <option value="{{ $data->id }}" {{ $data->id == $karyawan->id_jabatan ? 'selected' : '' }}>{{ $data->nama_jabatan }}</option>
                                      @endforeach
                                    </select>
                                    @error('id_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                          </div>
  
                          <div class="form-group">
                            <label class="form-label">id_status</label>
                                    <select class="form-control @error('id_status') is-invalid @enderror" name="id_status">
                                      @foreach ($status as $data)
                                      <option value="{{ $data->id }}" {{ $data->id == $karyawan->id_status ? 'selected' : '' }}>{{ $data->jenis_status }}</option>
                                      @endforeach
                                    </select>
                                    @error('id_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                          </div>
                          <a href="{{ route('karyawan.index') }}" class="btn btn-primary" type="submit">Kembali</a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection