<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Directories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/directory/create')}}">Add Directory</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/directory')}}">View Directory</a></li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/extension')}}">
          <i class="mdi mdi-collage menu-icon"></i>
          <span class="menu-title">Extensions</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi mdi-apps menu-icon"></i>
          <span class="menu-title">Department</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/department/create')}}">Add Department</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/department')}}">View Department</a></li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/sliders')}}">
          <i class="mdi mdi-view-carousel menu-icon "></i>
          <span class="menu-title">Home Slider</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class=" mdi mdi-settings-box menu-icon"></i>
          <span class="menu-title">Site Settings</span>
        </a>
      </li>
    </ul>
  </nav>

