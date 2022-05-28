{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">Del Cafe'in</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/list-menu') }}">List Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/transactions') }}">Transaction History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/review') }}">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/claim-coupons') }}">Claim Coupons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
          </li>
          <li>
            <p class="nav-link">Balance : {{ auth()->user()->balance }}</p>
          </li>
        </ul>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 border-0"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</button>
          </form>
      </div>
    </div>
  </nav> --}}



        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="margin-bottom:8%">
            <!-- Container wrapper -->
            <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="{{ url('/dashboard') }}">
                <img src="img/logo.jpeg" height="70px" alt="logo" loading="lazy"/>
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="{{ route('dashboard') }}"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
            <a class="nav-link {{ ($title === "List Menu") ? 'active' : '' }}" href="{{ url('/list-menu') }}"><strong>List Menu</strong></a>
          </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Transaction History") ? 'active' : '' }}" href="{{ url('/transactions') }}"><strong>Transaction History</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Review") ? 'active' : '' }}" href="{{ url('/review') }}"><strong>Review</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Claim Coupon") ? 'active' : '' }}" href="{{ url('/claim-coupons') }}"><strong>Claim Coupon</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="{{ url('/about-us') }}"><strong>About Us</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}"  href="{{ url('/contact-us') }}"><strong>Contact Us</strong></a>
                    </li>
                    </ul>
                    <!-- Left links -->
                    </div>
            <!-- Collapsible wrapper -->
            <button type="button" class="btn btn-success me-5" disabled>Balance: Rp.  {{ number_format(auth()->user()->balance, 0, ',', '.') }}</button>
            <!-- Notifications -->
                <!-- Avatar -->
                <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy"/>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                    <a class="dropdown-item" href="{{ url('/myprofile') }}">My profile</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="{{ url('/settings/edit') }}">Settings</a>
                    </li>
                    <li>
                    <a class="dropdown-item"
                    ><form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-3 border-0"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</button>
                      </form></a>
                    </li>
                </ul>
                </div>
                <strong class="d-none d-sm-block ms-3">{{ Auth::user()->name }}</strong>
            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
