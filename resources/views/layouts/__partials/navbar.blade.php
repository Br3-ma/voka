<nav style="max-width: 100%; width:100%" class="navbar sticky-top w-full bg-default top-top-nav">
    <div class="container-fluid">
        <a class="bg-white rounded-circle p-2 navbar-brand fw-bold" href="{{ url('/')}}" style="border-radius: 150px;
            background: #e6e6e6;">
            <img width="20" src="{{ asset('public/img/logo.png') }}">
        </a>
        <button id="sidebar-toggle" class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav sm-icons">
                {{-- <li><a class="nav-link" href="#"><i class="bi bi-people"></i></a></li> --}}
                <li>
                    <a title="Profile Settings" class="nav-link" href="{{ url('/user/profile')}}">
                        <small>{{ auth()->user()->fname.' '.auth()->user()->lname }}</small>
                        &nbsp;
                        @if (auth()->user()->profile_photo_path)
                        <img alt="..." src="{{ asset('public/storage/'.auth()->user()->profile_photo_path) }}" class="avatar avatar-xs rounded-circle me-2">
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        @endif
                    </a>
                </li>
            </ul>   
        </div>
    </div>
</nav>