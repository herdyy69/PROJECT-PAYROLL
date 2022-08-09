<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/Walls.png') }}" />
    <title>
      @if (Route::is('karyawan.index') )
        Data karyawan
      @elseif (Route::is('karyawan.create') )
        Tambah Data karyawan
      @elseif (Route::is('karyawan.edit') )
        Edit Data karyawan
      @elseif (Route::is('karyawan.show') )
        Lihat Data karyawan
        @elseif(Route::is('jabatan.index') )
        Data jabatan
        @elseif(Route::is('jabatan.create') )
        Tambah Data jabatan
        @elseif(Route::is('jabatan.edit') )
        Edit Data jabatan
        @elseif(Route::is('jabatan.show') )
        Lihat Data jabatan
        @elseif(Route::is('status.index') )
        Data status
        @elseif(Route::is('status.create') )
        Tambah Data status
        @elseif(Route::is('status.edit') )
        Edit Data status
        @elseif(Route::is('status.show') )
        Lihat Data status
        @elseif(Route::is('laporan.index') )
        Data Laporan
        @elseif(Route::is('laporan.create') )
        Tambah Laporan
        @elseif(Route::is('laporan.postJoin') )
        Tambah Laporan
        @elseif(Route::is('laporan.show') )
        Lihat Laporan
      @else
          PRIMA RASA ABADI
      @endif
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Oswald&display=swap" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset ('asset/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('asset/vendors/css/vendor.bundle.base.css')}}">
    {{-- bootstrap 5 --}}
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset ('asset/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{ asset ('asset/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('asset/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('asset/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset ('asset/css/style.css')}}">
    <!-- End layout styles -->
    <style>
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('layouts.includes.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.includes.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Prima Rasa Abadi 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset ('asset/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset ('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset ('asset/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{ asset ('asset/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset ('asset/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset ('asset/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('asset/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset ('asset/js/off-canvas.js')}}"></script>
    <script src="{{ asset ('asset/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset ('asset/js/misc.js')}}"></script>
    <script src="{{ asset ('asset/js/settings.js')}}"></script>
    <script src="{{ asset ('asset/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset ('asset/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>