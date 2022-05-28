<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" aria-current="page" href="{{ url('/dashboard') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === "Roles") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span data-feather="users"></span>
                User Management
            </a>
            <ul class="dropdown-menu {{ ($title === "Roles") ? 'active' : '' }}" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('/roles') }}">Roles</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Coupon") ? 'active' : '' }}" aria-current="page" href="{{ url('/coupon') }}">
            <span data-feather="gift"></span>
            Coupon
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Transaksi") ? 'active' : '' }}" aria-current="page" href="{{ url('/transaction') }}">
            <span data-feather="file-text"></span>
            Transaction
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Top Up") ? 'active' : '' }}" aria-current="page" href="{{ url('/top-up') }}">
            <span data-feather="file-text"></span>
            Top Up
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Setting") ? 'active' : '' }}" aria-current="page" href="{{ url('/change-password') }}">
              <span data-feather="key"></span>
              Settings
            </a>
        </li>
      </ul>
      
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 border-0"><span data-feather="log-out"></span> Log Out</button>
      </form>
    </div>
    
  </nav>
  