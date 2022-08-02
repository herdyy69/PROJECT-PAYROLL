@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">TAMBAH DATA STATUS</h4>
                    </div>
                  <div class="card-body">
                    <form action="{{ route('status.store') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="Jenis-Status" class="col-form-label">JENIS STATUS</label>
                        <input type="text" name="jenis_status" class="form-control @error('jenis_status') is-invalid @enderror" id="Nama-Jabatan" >
                          @error('jenis_status')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label for="Jenis-Status" class="col-form-label">BONUS STATUS</label>
                        <input type="text" name="bonus_status" class="form-control @error('bonus_status') is-invalid @enderror" id="Nama-Jabatan" >
                          @error('bonus_status')
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
