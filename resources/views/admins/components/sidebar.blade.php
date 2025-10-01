<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboards.index')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-gear"></i>
                <span>Backup Database (.sql)</span>
            </a>
            </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('contacts.index')}}">
                <i class="bi bi-gear"></i>
                <span>Contacts</span>
            </a>
            </li>
        </ul>
      </li><!-- End Components Nav -->

      <!-- End Icons Nav -->

      <li class="nav-heading">Menus</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#page-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="page-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('projects.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Projects</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('services.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Services</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('testimonials.index')}}">
                    <i class="bi bi-circle"></i>
                    <span>Tetimonials</span>
                </a>
            </li><!-- End Profile Page Nav -->

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#post-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pencil-square"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="post-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('posts.categories.index') }}">
                <i class="bi bi-circle"></i>
                <span>Categories</span>
            </a>
            </li>
          <li>
            <a href="{{route('posts.index')}}">
              <i class="bi bi-circle"></i><span> Create New</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users.index')}}">
          <i class="bi bi-person-add"></i>
          <span>Users</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside>
