@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mt-4">DATA JABATAN</h4>
                </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="Nama-Jabatan" class="col-form-label">JENIS JABATAN</label>
                    <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" class="form-control @error('nama_jabatan') is-invalid @enderror" id="Nama-Jabatan" >
                                    @error('nama_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="gaji_pokok" class="col-form-label">GAJI POKOK</label>
                    <input type="number" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" class="form-control @error('gaji_pokok') is-invalid @enderror" id="gaji_pokok">
                                     @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="uang_makan" class="col-form-label">UANG MAKAN</label>
                    <input type="number" name="uang_makan" value="{{ $jabatan->uang_makan }}" class="form-control @error('uang_makan') is-invalid @enderror" id="uang_makan">
                                    @error('uang_makan')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="uang_transportasi" class="col-form-label">UANG TRANSPORTASI</label>
                    <input type="number" name="uang_transportasi" value="{{ $jabatan->uang_transportasi }}" class="form-control @error('uang_transportasi') is-invalid @enderror" id="uang_transportasi">
                                    @error('uang_transportasi')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="bonus_jabatan" class="col-form-label">BONUS</label>
                    <input type="number" name="bonus_jabatan" value="{{ $jabatan->bonus_jabatan }}" class="form-control @error('bonus_jabatan') is-invalid @enderror" id="bonus_jabatan">
                                    @error('bonus_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                  </div>
                  <a href="{{ route('jabatan.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection