<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item ">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            @role('rw')
                <li class="nav-item nav-category">Biodata</li>
                <li class="nav-item">
                    @if (is_null($data) || $data->users_id !== auth()->user()->id)
                        <a href="{{ route('rw.daftar_rw.create') }}" class="nav-link">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">Data RW</span>
                        </a>
                    @else
                        <a href="{{ route('rw.daftar_rw.index') }}" class="nav-link">
                            <i class="link-icon" data-feather="user"></i>
                            <span class="link-title">Data RW</span>
                        </a>
                    @endif
                </li>
            @endrole

            <li class="nav-item nav-category">Kuisioner</li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="folder-plus"></i>
                    <span class="link-title">Kuisioner</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            {{-- <li class="nav-item {{ active_class(['email/*']) }}">
              <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Email</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse {{ show_class(['email/*']) }}" id="email">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}">Inbox</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}">Read</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Compose</a>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                        value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                        value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Version:</h6>
            <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
                <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
            </a>
            <h6 class="text-muted mb-2">Dark Version:</h6>
            <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
                <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
            </a>
        </div>
    </div>


</nav>
