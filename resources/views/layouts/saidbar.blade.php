
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/SuperAdmin/dashboard') }}" class="brand-link">
      <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>










    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admin/img/kamrul.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">    @if (Auth::guard('superadmin')->check())
                {{ Auth::guard('superadmin')->user()->name }}



             @endif</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Category part
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">



                <li class="nav-item">
                  <a href="{{ url('SuperAdmin/create/category') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create category</p>
                  </a>
                </li>




                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>category List</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                Post Part
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="{{ url('SuperAdmin/create/post') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Post</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('SuperAdmin/all/post')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Post</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- create Admin --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                Sub Category
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('SuperAdmin/create/subcategory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create subcategory</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/icons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List subcategory</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General Elements</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advanced Elements</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pages/forms/validation.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Validation</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Creat Admin
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('SuperAdmin/create/admin')  }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/SuperAdmin/list/admin') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Tables</p>
                  </a>
                </li>

              </ul>
            </li>



            <li class="nav-header">MISCELLANEOUS</li>

            <li class="nav-header">MULTI LEVEL EXAMPLE</li>





          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>


{{-- saibar area --}}






    <!-- /.sidebar -->
  </aside>

