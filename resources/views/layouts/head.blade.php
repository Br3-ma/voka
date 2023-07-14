@php
    $currentRouteName = \Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vookamba</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{ asset('public/img/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/footer.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/assets/css/voo.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            li {
                list-style:none;
	            font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
            }
            .dropdown-content {
	            font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
                display: none;
                position: absolute;
                z-index: 9999; /* Set a higher z-index value */
            }
        </style>
        <script>
            // Hide the preloader when the page finishes loading
            window.addEventListener('load', function() {
                var preloader = document.querySelector('.preloader');
                preloader.style.display = 'none';
            });
        </script>
        {{-- @vite('resources/css/app.css') --}}
    </head>
    <body>
        <!-- Preloader HTML -->
        <div class="preloader">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <div style="z-index: 1; position: relative;" class=" text-primary">
            <div class="py-3 px-6 mb-10 bg-white">
                <div class="mx-auto px-8 flex @if($currentRouteName != 'welcome') mt-1 @else  @endif justify-content-center justify-center items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <img class="h-12 w-12 text-red-500 @if($currentRouteName == 'welcome') mt-3 @endif" src="{{ asset('public/img/logo.png') }}">
                    </a>
                    
                    
                    <div class="ml-6 flex flex-1 gap-x-3 @if($currentRouteName == 'welcome') mt-1 @else mt-2 @endif">
                        <form action="{{ route('search') }}" method="GET" class="w-full">
                            <div class="w-full flex shadow-md">
                                <input id="voo_searcher" type="text" name="query" class="w-full rounded-md px-3 py-2 text-sm" placeholder="Ex. Zanaco" />
                                <button type="submit" class="btn bg-[#a609c5] p-3 px-4 relative font-extrabold text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
            
                    <div class="ml-2 flex  @if($currentRouteName != 'welcome') mb-2 @else mt-1  @endif">
                        <a href="{{ route('subscription') }}" class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Add a Business</span>
                        </a>
                
                        <a target="_blank" href="{{ route('categories') }}" class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Write a Review </span>
                        </a>
                        @if (Route::has('login'))
                            @auth
                            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                                
                                <li class="prof-dropdown">
                                    <a href="{{ url('/user/profile')}}" class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                        {{-- <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span> --}}
                                    </a>
                                    <div class="dropdown-content top-16 right-14 left-auto shadow-lg border border-gray-300">
                                        <div class="bg-white text-black p-4">
                                            <ul class="block space-y-4">
                                                @auth
                                                    @if (auth()->user()->type == 'owner')
                                                    <li><a href="{{ route('dashboard') }}" class="text-black text-sm hover:text-gray-300">Dashboard</a></li>
                                                    @else                                                
                                                    <li><a href="{{ route('my-profile') }}" class="text-black text-sm hover:text-gray-300">About Me</a></li>
                                                    <li><a href="{{ route('my-collection') }}" class="text-black text-sm hover:text-gray-300">My Collection</a></li>
                                                    @endif
                                                @endauth
                                                <hr>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        {{-- <i class="bi bi-box-arrow-left"></i> --}}
                                                        <button type="submit" class="text-black text-sm text-center justify-content-between flex hover:text-gray-300 ai-icon">
                                                            {{-- <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> --}}
                                                            <span class="ms-2">Logout </span>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        <div>
                                    </div>
                                </li>
                            </div>                             
                            @else
                                <a href="{{ route('login') }}" class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
                                    <span class="text-sm font-medium">Sign in</span>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-[#a609c5] text-white ml-2 bg-primary-500 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-primary-100">
                                        <span class="text-sm font-medium">Sign up</span>
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            
                @if($currentRouteName !== 'welcome')
                    <div class="px-8 mt-4 flex text-white items-center justify-between">
                        <div class="flex gap-x-2 py-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-blue-500 font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex gap-x-8">
                            <a href="{{ route('categories', ['category' => 'restaurant']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Restaurant Services</a>
                            <a href="{{ route('categories', ['category' => 'home']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Home Services</a>
                            <a href="{{ route('categories', ['category' => 'automotives']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Auto Services</a>
                            <a href="{{ route('categories', ['category' => 'banking']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Banking</a>
                            {{-- <a href="{{ route('categories', ['category' => 'fashion']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories', ['category' => 'health']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Health</a>
                            <a href="{{ route('categories', ['category' => 'pharmacy']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories', ['category' => 'toys-games']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Toys & Games</a> --}}
                        </div>
                
                        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
                    </div>
                    {{-- @else
                    <div class="px-8 mt-4 flex text-white items-center justify-between">
                        <div class="flex gap-x-2 py-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-blue-400 font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex gap-x-8">
                            <a href="{{ route('categories', ['category' => 'best_seller']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Best seller</a>
                            <a href="{{ route('categories', ['category' => 'new']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">New Releases</a>
                            <a href="{{ route('categories', ['category' => 'books']) }}" class="text-slate-700 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Books</a>
                            <a href="{{ route('categories', ['category' => 'computers']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Computers</a>
                            <a href="{{ route('categories', ['category' => 'fashion']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories', ['category' => 'health']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Health</a>
                            <a href="{{ route('categories', ['category' => 'pharmacy']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories', ['category' => 'toys-games']) }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Toys & Games</a>
                        </div>
                
                        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
                    </div> --}}
                @endif
            </div>
        </div>


