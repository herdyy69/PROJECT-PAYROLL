@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="Nama-Jabatan" class="col-form-label">JENIS STATUS</label>
                    <input type="text"  name="jenis_status" value="{{ $status->jenis_status }}" style="background-color: #000000;" class="form-control @error('jenis_status') is-invalid @enderror" id="Nama-Jabatan" disabled>
                                    @error('jenis_status')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="bonus_status" class="col-form-label">BONUS STATUS</label>
                    <input type="number" name="bonus_status" value="{{ $status->bonus_status }}" style="background-color: #000000;" disabled class="form-control @error('bonus_status') is-invalid @enderror" id="bonus_status">
                                     @error('bonus_status')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                  </div>
                  <a href="{{ route('status.index') }}" class="btn btn-primary" type="submit">KEMBALI</a>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection