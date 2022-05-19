<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ url('asset/adminlte/img/payroll-logo-150.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">POS System</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url('asset/adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Hello, { Admin }</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('/home') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>
              Dashboard

            </p>
          </a>
        </li>
        <li class="nav-header">Master Data</li>
        <li class="nav-item">
          <a href="{{ url('user') }}" class="nav-link">
            <i class="nav-icon fas fa-user text-info"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/product') }}" class="nav-link">
            <i class="nav-icon fas fa-wrench text-info"></i>
            <p>
              Product
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/courier') }}" class="nav-link">
            <i class="nav-icon fas fa-truck text-info"></i>
            <p>
              courier
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a href="{{ url('admin/religion') }}" class="nav-link">
              <i class="nav-icon fas fa-mosque text-info"></i>
              <p>
                Agama
              </p>
            </a>
          </li> -->

        <li class="nav-header">Transaction</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-plus text-info"></i>
            <p>
              New Transaction
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt text-info"></i>
              <p>
                List Transaction
              </p>
            </a>
          </li>
        <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt text-info"></i>
              <p>
                Presensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature text-info"></i>
              <p>
                Cuti
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clock text-info"></i>
              <p>
                Surat Lembur
              </p>
            </a>
          </li> -->

        <li class="nav-header">Report</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt text-info"></i>
            <p>
              Report 1
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt text-info"></i>
            <p>
              Report 2
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt text-info"></i>
            <p>
              Report 3
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>