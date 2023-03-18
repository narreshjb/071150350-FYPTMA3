<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ URL::to($user->image) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block">{{ Auth::user()->name }}</a>
      </div>
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
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->




        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-link"></i>
              <p>
                Barber
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.customerschedulshow') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('customer.apointment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Apointment</p>
                </a>
              </li>

            </ul>
          </li>







          <li class="nav-item">
            <a href="{{ route('customer.profile') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Profile
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('customer.feedbackpage') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-comment"></i>
              <p>
                Feedback
              </p>
            </a>
          </li>



        <li class="nav-item">
            <a href="{{ route('logout') }}"

            onclick="event.preventDefault();document.getElementById('logout-form').submit();"

            class="nav-link">
            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Logout
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
