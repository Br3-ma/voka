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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-6P5p0Y+sz0NTA6Pi1kcbxlCXy2JBf5V5vDb7YOULUipk4NEd8Xy5+5Ka1VXnUmT5" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{ asset('public/img/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/footer.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/assets/css/voo.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/slider-banner.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/pills.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/responsiveness.css') }}">
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
            /* Slide in Sidebar */
            /* Default styles for the sidebar */
            #sidebar {
                z-index: 9999;
                height: 100%;
                width: 0;
                position: fixed;
                top: 0;
                left: 0;
                background-color: #3b1b4c; /* Set the background color of the sidebar */
                overflow-x: hidden;
                transition: 0.5s; /* Set the transition duration */
                padding-top: 60px; /* Adjust the top padding to match the height of your fixed navbar */
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

            }

            #sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 18px;
                color: #ffffff;
                display: block;
                transition: 0.3s;
            }

            #sidebar a:hover {
                color: #f1f1f1;
            }

            /* Styles for the button that opens the sidebar */
            #main-content {
                transition: margin-left 0.5s;
                padding: 16px;
            }

            /* Media query to adjust styles for smaller screens */
            @media screen and (max-height: 450px) {
                #sidebar a {
                    font-size: 14px;
                }
                #sidebar {
                    padding-top: 15px;
                }
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
            <div class="py-3 sm:px-6 mb-0 bg-white">
                <div class="sm:mx-auto sm:px-8 flex @if($currentRouteName != 'welcome') mt-1 @else  @endif justify-content-center justify-center items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <img class="h-12 w-12 text-red-500 @if($currentRouteName == 'welcome') mt-3 @endif" src="{{ asset('public/img/logo.png') }}">
                    </a>
            
                    <div class="ml-6 flex flex-1 gap-x-3 @if($currentRouteName == 'welcome') mt-1 @else mt-2 @endif">
                        <form action="{{ route('search') }}" method="GET" class="w-full">
                            <div class="w-full flex shadow-md">
                                <input id="voo_searcher" type="text" name="query" class="w-full rounded-md px-3 py-2 text-sm" placeholder="{{ $query ?? 'Ex. Zanaco' }}" />
                                <button type="submit" class="btn bg-[#a609c5] p-3 px-4 relative font-extrabold text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
            
                    <div class="ml-2 flex  @if($currentRouteName != 'welcome') mb-2 @else mt-1  @endif">
                        <a href="{{ route('subscription') }}" class="hidden sm:flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Add a Business</span>
                        </a>
                
                        <a href="{{ route('categories') }}" class="hidden sm:flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill h-5 w-5 text-gray-500" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
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
                                                    @if (auth()->user()->type == 'admin' || auth()->user()->type == 'owner')
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
                                                        <button type="submit" class="text-black text-sm text-center align-items-center justify-content-center flex hover:text-gray-300 ai-icon">
                                                            <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
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
                                <button class="btn btn-primary lg:hidden navbar-toggler"  id="sidebar-toggle" type="button" aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                    </svg>
                                </button>
                                <a href="{{ route('login') }}" class="ml-2 hidden sm:flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
                                    <span class="text-sm font-medium">Sign in</span>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-[#a609c5] text-white ml-2 bg-primary-500 hidden sm:flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-primary-100">
                                        <span class="text-sm font-medium">Sign up</span>
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            
                @if($currentRouteName !== 'welcome')
                    <div class="px-8 mt-4 flex text-white items-center justify-content-center">
                        <div class="flex gap-x-2 py-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class=" text-xs lg:text-sm  text-blue-500 font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex-wrap items-center w-full">
                            <a href="{{ route('categories', ['category' => 'restaurant']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Restaurant Services</a>
                            <a href="{{ route('categories', ['category' => 'home']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Home Services</a>
                            <a href="{{ route('categories', ['category' => 'automotives']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Auto Services</a>
                            <a href="{{ route('categories', ['category' => 'banking']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Banking</a>
                            <a href="{{ route('categories', ['category' => 'fashion']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories', ['category' => 'health']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Health</a>
                            <a href="{{ route('categories', ['category' => 'pharmacy']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories', ['category' => 'toys-games']) }}" class="text-black cursor-pointer rounded-sm py-1 px-2 text-xs lg:text-sm font-medium">Toys & Games</a>
                        </div>
                
                        {{-- <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span> --}}
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
        
        <div id="sidebar">
            <!-- Add your sidebar content here -->
            <a href="" onclick="closeNav()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </a>
            <br>
            <a href="{{ route('categories') }}">Write a Review</a>
            <a href="{{ route('subscription') }}">Add Your Business</a>
            @auth
                @if (auth()->user()->type == 'admin' || auth()->user()->type == 'owner')
                <a href="{{ route('register') }}">Dashboard</a>
                @else
                <a href="{{ route('register') }}">My Profile</a>
                <a href="{{ route('register') }}">My Collection</a>
                @endif
            @else
                <a style="color: #aea9b1" href="{{ route('register') }}">Create an Account</a>
                <a style="color: #aea9b1" href="{{ route('login') }}">Sign In</a>
            @endauth
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var sidebar = document.getElementById("sidebar");
                var content = document.getElementById("main-content");

                document.getElementById("sidebar-toggle").addEventListener("click", function () {
                    if (sidebar.style.width === "250px") {
                        closeNav();
                    } else {
                        openNav();
                    }
                });
            });
            function openNav() {
                    sidebar.style.width = "250px";
                    content.style.marginLeft = "250px";
            }

            function closeNav() {
                    sidebar.style.width = "0";
                    content.style.marginLeft = "0";
            }
        </script>


