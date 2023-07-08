<nav class="border-b px-4 py-2 bg-[#a609c5]">
    <div class="flex flex-wrap items-center justify-between md:justify-around">
        <!-- logo -->
        <a href="{{ route('welcome') }}" class="p-1" style="border-radius: 150px; background:  #e6e6e6;">
            <img class="h-10" src="{{ asset('public/img/logo.png') }}" alt="vookamba">
        </a>

        <!-- search-->
        <div class="relative hidden sm:block text-gray-500">
            {{-- <input class="search-bar max-w-xs border rounded bg-gray-200 px-4
                    text-center outline-none focus:border-gray-400" type="search" placeholder="Search">
            <i class="fa fa-search absolute top-0 left-0 ml-12 mt-1"></i> --}}
        </div>

        <div class="space-x-4 flex">
            <a class="d-flex text-gray-200 font-semibold text-sm" href="{{ route('edit-info') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                Edit Profile</a>
            <a class="d-flex text-gray-200 font-semibold text-sm" href="{{ route('change-pass') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                    <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                  </svg>
                Change Password</a>
            <a class="d-flex bg-yellow-500 px-2 py-1 text-gray-600 font-semibold text-sm" href="{{ route('my-profile') }}">
                
                About Me</a>
        </div>
    </div>
</nav>