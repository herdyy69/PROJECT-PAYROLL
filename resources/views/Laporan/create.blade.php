@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">Tambah Data Karyawan</h4>
                    </div>
                  <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">BUAT LAPORAN</label>

                       <form action="{{ route('laporan.postJoin') }}" method="post">
                                @csrf
                                <select class="form-control" id="nama_karyawan" @error('nama_karyawan') is-invalid @enderror name="nama_karyawan">
                                 @foreach ($karyawan as $data)
                                  @if ($karyawan->count() == 0)
                                  <option value="">Tidak Ada Data</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->nama_karyawan }}</option>
                                  @endif
                                @endforeach
                                </select>
                                 <button type="submit" class="btn btn-primary me-2 MT-2">PROSES</button>
                                </form>
                                @error('nama_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
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
