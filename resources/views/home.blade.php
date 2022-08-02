@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5>Total Karyawan</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">100</h2>
                      <p class="text-success ms-2 mb-0 font-weight-medium">Orang</p>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-account-multiple-plus text-primary ms-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5>Total Laporan</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">100</h2>
                      <p class="text-success ms-2 mb-0 font-weight-medium">Laporan</p>
                    </div>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-chart-box text-primary ms-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('News') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
