@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">TAMBAH DATA JABATAN</h4>
                    </div>
                  <div class="card-body">
                    <form action="{{ route('jabatan.store') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="Nama-Jabatan" class="col-form-label">NAMA JABATAN</label>
                        <input type="text" name="nama_jabatan" class="form-control @error('nama_jabatan') is-invalid @enderror" id="Nama-Jabatan" >
                                        @error('nama_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                      </div>
                      <div class="form-group">
                        <label for="gaji_pokok" class="col-form-label">GAJI POKOK</label>
                        <input type="number" name="gaji_pokok" class="form-control @error('gaji_pokok') is-invalid @enderror" id="gaji_pokok">
                                         @error('gaji_pokok')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                         @enderror
                      </div>
                      <div class="form-group">
                        <label for="uang_makan" class="col-form-label">UANG MAKAN</label>
                        <input type="number" name="uang_makan" class="form-control @error('uang_makan') is-invalid @enderror" id="uang_makan">
                                        @error('uang_makan')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                      </div>
                      <div class="form-group">
                        <label for="uang_transportasi" class="col-form-label">UANG TRANSPORTASI</label>
                        <input type="number" name="uang_transportasi" class="form-control @error('uang_transportasi') is-invalid @enderror" id="uang_transportasi">
                                        @error('uang_transportasi')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                      </div>
                      <div class="form-group">
                        <label for="bonus_jabatan" class="col-form-label">BONUS JABATAN</label>
                        <input type="number" name="bonus_jabatan" class="form-control @error('bonus_jabatan') is-invalid @enderror" id="bonus_jabatan">
                                        @error('bonus_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                         @enderror
                      </div>
                      <button type="submit" class="btn btn-primary me-2">SIMPAN</button>
                      <a href="{{ route('jabatan.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
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
