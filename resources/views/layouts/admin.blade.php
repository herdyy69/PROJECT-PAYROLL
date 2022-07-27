<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href=" assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href=" assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href=" assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href=" assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href=" assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href=" assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href=" assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('layouts.includes.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.includes.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

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
    <script src=" assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=" assets/vendors/chart.js/Chart.min.js"></script>
    <script src=" assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src=" assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src=" assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src=" assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src=" assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" assets/js/off-canvas.js"></script>
    <script src=" assets/js/hoverable-collapse.js"></script>
    <script src=" assets/js/misc.js"></script>
    <script src=" assets/js/settings.js"></script>
    <script src=" assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src=" assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>