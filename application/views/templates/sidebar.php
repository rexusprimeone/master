

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rexuspanel 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Navigasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo base_url('dashboard/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>  
            
            <li class="nav-item">
                <a href="<?php echo base_url('post/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('news/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('blog/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('gallery/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('category/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('slug/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slug</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('auth/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log Out
                <span class="right badge badge-danger">Keluar</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
