<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-effect-neon"   style="font-family: Sofia, sans-serif; padding:30px; ">Dig-145</span>
    </a>

    <!-- Sidebar -->
    <div class="side">
        <div class="info sik-detail">
        <i class="fa-solid fa-house-laptop"></i></i>
          <a href="{{url('/')}}" class="sik-detail">House145</a>
        </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="" class="nav-link active" style="margin-left: 10px;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Menu
              </p>
            </a>
            <hr style="width: 98%;">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('master-data')}}" class="master-data-side nav-link {{(Request::segment(1) == 'master-data') ? 'active' : '' }}">
                <i class="fa-solid fa-folder-tree"></i>
                  Master Data
                </a>
              </li>
            <hr style="width: 98%;">
              <li class="nav-item">
                <a class="master-data-side nav-link {{(Request::segment(2) == 'master-menu') ? 'active' : '' }}" href="{{url('cafe145/master-menu')}}" >
                <i class="fa-solid fa-mug-saucer"></i>
                  Cafe <span  style="color:goldenrod; font-weight:500; font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">145</span>
                </a>
              </li>
              <hr style="width: 98%;">
              <li class="nav-item">
                <a href="" class="master-data-side nav-link">
                <i class="fa fa-book" aria-hidden="true"></i>
                  Laporan
                </a>
              </li>
              <hr style="width: 98%;">
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
