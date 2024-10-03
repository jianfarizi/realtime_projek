<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SAMPAHKU</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
@if(Auth::check() && Auth::user()->type == '2')
        <li class="nav-item">
          <a href="dashboard" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          </ul>
        </li>
        <li class="nav-item">
          <a href="laporan" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Laporan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pendaki" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Data Pendaki
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="sampah" class="nav-link">
            <i class="nav-icon fas fa-trash"></i>
            <p>
              Data Sampah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/galeri" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Galeri
            </p>
          </a>
        </li>
      @endif

        @if(Auth::check() && Auth::user()->type == '1')
        <li class="nav-item">
          <a href="/laporan1" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>