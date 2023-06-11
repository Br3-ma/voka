<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-default top-top-nav">
    <div class="container-fluid">
      <a class="bg-white rounded-circle p-2 navbar-brand fw-bold" href="{{ url('/')}}" style="border-radius: 150px;
      background: linear-gradient(145deg, #e6e6e6, #ffffff);
      box-shadow:  50px 50px 100px #fcfcfc,
                   -50px -50px 100px #ffffff;">
        <img src="{{ asset('public/img/logo.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link">Link</a>
            </li> --}}
        </ul>
        <ul class="navbar-nav sm-icons">
            {{-- <li><a class="nav-link" href="#"><i class="bi bi-people"></i></a></li> --}}
            <li>
                <a title="Profile Settings" class="nav-link" href="{{ url('/user/profile')}}">
                    <small>{{ auth()->user()->fname.' '.auth()->user()->lname }}</small>
                    &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>