<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/hasil-menu') }}">
          <span data-feather="key"></span>
          Menu
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/publish-menu') }}">
          <span data-feather="key"></span>
          Publish Menu
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/feedback') }}">
          <span data-feather="key"></span>
          Feedback
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="{{ url('/settings') }}">
        <span data-feather="key"></span>
        Change Password
      </a>
  </li>
    </ul>
    
    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="nav-link px-3 border-0"><span data-feather="log-out"></span> Log Out</button>
    </form>
  </div>
  
</nav>
