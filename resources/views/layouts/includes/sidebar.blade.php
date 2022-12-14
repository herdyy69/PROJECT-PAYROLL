<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <style>
      .brand-logo, .brand-logo-mini {
        font-family: 'Cinzel', serif;
        text-decoration: none;
      }
    </style>
    <a class="sidebar-brand brand-logo" style="font-size: 1.3em; color: white" href="index.html">PRIMA RASA ABADI</a>
    <a class="sidebar-brand brand-logo-mini" style="font-size: 1.1em; color: white" href="index.html">PRA</a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
                <img class="img-xs rounded-circle"  src="{{ asset('images/akun/' . Auth::user()->foto) }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">
              {{ Auth::user()->name }}</h5>
            <span>{{ Auth::user()->level }}</span>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Feature</span>
    </li>
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ url('home') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
        <span class="menu-title ">Home</span>
      </a>
    </li>
    @if (Auth::user()->level == 'Admin')
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('karyawan.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
        <span class="menu-title ">KARYAWAN</span>
      </a>
    </li>
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('jabatan.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account-arrow-up"></i>
        </span>
        <span class="menu-title">JABATAN</span>
      </a>
    </li>
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('status.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account-reactivate"></i>
        </span>
        <span class="menu-title">STATUS</span>
      </a>
    </li>
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('laporan.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-chart"></i>
        </span>
        <span class="menu-title">LAPORAN</span>
      </a>
    </li>
    @elseif (Auth::user()->level == 'Super Admin')
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('akun.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-account-circle"></i>
        </span>
        <span class="menu-title">ADMIN ACCOUNT</span>
      </a>
    </li>
    <li class="nav-item menu-items mb-2">
      <a class="nav-link" href="{{ route('laporan.index') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-chart"></i>
        </span>
        <span class="menu-title">LAPORAN</span>
      </a>
    </li>
    @endif
    
    
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/forms/basic_elements.html">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Form Elements</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/icons/mdi.html">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Documentation</span>
      </a>
    </li> --}}
  </ul>
</nav>