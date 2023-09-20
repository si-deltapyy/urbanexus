<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Urba<span>Nexus</span>
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
        <li class="nav-item {{ active_class(['/']) }}">
          <a href="{{ url('/') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Menu</li>
        <li class="nav-item {{ active_class(['email/*']) }}">
          <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Kuesioner</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="email">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ url('/user-page/kuesioner') }}" class="nav-link {{ active_class(['user-page/kuesioner']) }}">Kuesioner 1</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/user-page/kuesioner') }}" class="nav-link {{ active_class(['user-page/kuesioner']) }}">Kuesioner 2</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/user-page/kuesioner') }}" class="nav-link {{ active_class(['user-page/kuesioner']) }}">Kuesioner 3</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{ url('/input') }}" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Input Data</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

