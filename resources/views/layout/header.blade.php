<nav class="navbar">
    <a href="#" class="sidebar-toggler">
      <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
      <form class="search-form">
        <div class="input-group">
          <div class="input-group-text">
            <i data-feather="search"></i>
          </div>
          <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
        </div>
      </form>
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="wd-30 ht-30 rounded-circle" src="{{ url('assets/images/30x30.png') }}" alt="profile">
          </a>
          <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
            <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
              <div class="mb-3">
                <img class="wd-80 ht-80 rounded-circle" src="{{ url('assets/images/80x80.png') }}" alt="">
              </div>
              <div class="text-center">
                <p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
                <p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
              </div>
            </div>
            <ul class="list-unstyled p-1">
                @role('RT')
              <li class="dropdown-item py-2">
                <a href="{{ route('rt.daftar_rt.create') }}" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              @endrole

              @role('RW')
              <li class="dropdown-item py-2">
                <a href="{{ route('rw.daftar_rw.create') }}" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              @endrole

              <li class="dropdown-item py-2">
                  <form method="POST" action="{{ route('logout') }}">
                <a href="javascript:;" class="text-body ms-0">
                  <i class="me-2 icon-md" data-feather="log-out"></i>
                    @csrf

                    <a :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </a>
            </form>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
