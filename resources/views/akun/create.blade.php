@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts/_flash')
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-4">TAMBAH AKUN ADMIN</h4>
                    </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('akun.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="foto" class="col-form-label">FOTO</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" >
                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                          </div>
                      <div class="form-group">
                        <label for="nama_admin" class="col-form-label">NAMA</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nama_admin" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-form-label">USERNAME</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="Username" >
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-form-label">EMAIL</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-form-label">PASSWORD</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" >
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="password_confirmation" class="col-form-label">PASSWORD CONFIRMATION</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" >
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label for="level" class="col-form-label">LEVEL</label>
                        <div class="col-md-6">
                            <select class="form-control" id="level" name="level" required="required">
                                <option value="" disabled selected>- Pilih Role -</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option>
                            </select>    
                        </div>
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
