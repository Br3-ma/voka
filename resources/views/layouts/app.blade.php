<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Styles -->
        @livewireStyles

        <style>
            /* Webpixels CSS */
            /* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
            /* URL: https://github.com/webpixels/css */

            @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

            /* Bootstrap Icons */
            @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
            @import url('https://fonts.googleapis.com/css?family=Roboto');
            html, body{
                max-width: 100%;
                width: 100%;
            }
            .top-top-nav{
                border-radius: 0px;
                background: #60007a;
                box-shadow: inset 15px 15px 23px #2f003c,
                            inset -15px -15px 23px #9100b8;
            }
            /* Customize the background color for Toastr notifications */
            .toast-success {
                background-color: #00ff00; /* Set the desired background color here */
            }  
            .toast-title {
                color: #035255; /* Set the desired title text color here */
            }

            .toast-message {
                color: #ffffff; /* Set the desired message text color here */
            }

            /* Media Query NavBar */
            /* Default styles for larger screens */

            .navbar-brand img {
                max-width: 100%; /* Ensure the logo does not exceed its container */
                height: auto; /* Maintain the logo's aspect ratio */
            }

            /* Media query for smaller screens, such as mobile devices */

            @media (max-width: 767px) {
                .navbar-brand {
                    width: 10%; /* Make the logo take up the full width of its container */
                    text-align: center; /* Center the logo */
                    margin-bottom: 10px; /* Add some space below the logo for better visual appearance */
                }

                #desk-side-nav{
                    display: none;
                }
                .navbar-brand img {
                    width: 100%; /* Adjust the width of the logo as needed for smaller screens */
                }
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
                background-color: #52325cf8; /* Set the background color of the sidebar */
                overflow-x: hidden;
                transition: 0.5s; /* Set the transition duration */
                padding-top: 60px; /* Adjust the top padding to match the height of your fixed navbar */
            }

            #sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 18px;
                color: white;
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

            
            /* Default styles for the sidebar-toggle button */
            #sidebar-toggle {
                display: none; /* Hide by default */
            }

            /* Media query to show the sidebar-toggle button on mobile and tablet */
            @media only screen and (max-width: 992px) {
                #sidebar-toggle {
                display: block; /* Show on screens with a maximum width of 992px (e.g., tablets and mobiles) */
                }
            }
            @media (max-width: 767px) {
                #navbarSupportedContent {
                    display: none;
                }
            }
        </style>
    </head>
    <body class="w-full">
            <!-- Preloader HTML -->
            <div class="preloader">
                <div class="spinner">
                    <div class="cube1"></div>
                    <div class="cube2"></div>
                </div>
            </div>
            <!-- Dashboard -->
            @include('layouts.__partials.navbar')
            <div class="w-full h-lg-full bg-surface-secondary">
                <!-- Vertical Navbar -->
                <div class="d-flex w-full">
                    <nav id="desk-side-nav" class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
                        <div class="container-fluid">
                            <!-- Collapse -->
                            <div class="collapse navbar-collapse" id="sidebarCollapse">
                                <!-- Navigation -->
                                <ul class="navbar-nav pt-8">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                            </svg> Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-business')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop-window ml-2" viewBox="0 0 16 16">
                                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg> Business/ Company
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-reviews')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                                            </svg> Reviews
                                        </a>
                                    </li>
                                    @if (auth()->user()->type == 'admin')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-categories')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                            </svg> Categories
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-tags')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                                <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                                <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                            </svg> Tags
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-subscriptions') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                                            </svg> Subscription Plans
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('manage-payments') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                            </svg> Payments 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                            </svg> Users
                                        </a>
                                    </li>
                                    @endif
                                    {{--
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="bi bi-chat"></i> Messages
                                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="bi bi-bookmarks"></i> Collections
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="bi bi-people"></i> Users
                                        </a>
                                    </li> --}}
                                <!-- Divider -->
                                <hr class="navbar-divider my-5 opacity-20">
                                
                                <li class="nav-item">  
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        {{-- <i class="bi bi-box-arrow-left"></i> --}}
                                        <button type="submit" class="dropdown-item ai-icon">
                                            <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ms-2">Logout </span>
                                        </button>
                                    </form>
                                </li>
                                </ul>
                                <!-- Navigation -->
                                {{-- <ul class="navbar-nav mb-md-4">
                                    <li>
                                        <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                                            Contacts
                                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link d-flex align-items-center">
                                            <div class="me-4">
                                                <div class="position-relative d-inline-block text-white">
                                                    <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block text-sm font-semibold">
                                                    Marie Claire
                                                </span>
                                                <span class="d-block text-xs text-muted font-regular">
                                                    Paris, FR
                                                </span>
                                            </div>
                                            <div class="ms-auto">
                                                <i class="bi bi-chat"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link d-flex align-items-center">
                                            <div class="me-4">
                                                <div class="position-relative d-inline-block text-white">
                                                    <span class="avatar bg-soft-warning text-warning rounded-circle">JW</span>
                                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block text-sm font-semibold">
                                                    Michael Jordan
                                                </span>
                                                <span class="d-block text-xs text-muted font-regular">
                                                    Bucharest, RO
                                                </span>
                                            </div>
                                            <div class="ms-auto">
                                                <i class="bi bi-chat"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link d-flex align-items-center">
                                            <div class="me-4">
                                                <div class="position-relative d-inline-block text-white">
                                                    <img alt="..." src="https://images.unsplash.com/photo-1610899922902-c471ae684eff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block text-sm font-semibold">
                                                    Heather Wright
                                                </span>
                                                <span class="d-block text-xs text-muted font-regular">
                                                    London, UK
                                                </span>
                                            </div>
                                            <div class="ms-auto">
                                                <i class="bi bi-chat"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </nav>
    
                    <!-- Page Content -->
                    <main class="w-full">
                        {{ $slot }}
                    </main>
                </div>
                <div id="sidebar">
                    <!-- Add your sidebar content here -->
                    <a href="#" onclick="closeNav()">Close</a>
                    <ul class="navbar-nav pt-8">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                </svg> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-business')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop-window ml-2" viewBox="0 0 16 16">
                                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
                                </svg> Business/ Company
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-reviews')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                                </svg> Reviews
                            </a>
                        </li>
                        @if (auth()->user()->type == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-categories')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                </svg> Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-tags')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                    <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                    <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                </svg> Tags
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-subscriptions') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                                </svg> Subscription Plans
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-payments') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                </svg> Payments 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg> Users
                            </a>
                        </li>
                        @endif
                        {{--
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-chat"></i> Messages
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bookmarks"></i> Collections
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#preview-profile-pic-user').hide();
            $('#select-profile-pic-user').change(function(){
                
                $('#preview-profile-pic-user').show();
                $('#currentOldPic').hide();
                let reader = new FileReader();
                reader.onload = (e) => { 
                    $('#preview-profile-pic-user').attr('src', e.target.result); 
                }
                reader.readAsDataURL(this.files[0]); 
            });
        });

        toastr.options = {
            debug: false,              // Enable debugging mode
            newestOnTop: false,        // Show newest notifications on top
            progressBar: true,         // Display a progress bar
            positionClass: 'toast-bottom-left',  // Notification position ('toast-top-right', 'toast-top-left', 'toast-bottom-right', 'toast-bottom-left', 'toast-top-full-width', 'toast-bottom-full-width', 'toast-top-center', 'toast-bottom-center')
            preventDuplicates: false,  // Prevent duplicate notifications
            onclick: null,             // Callback function when a notification is clicked
            showDuration: '300',       // Duration of the notification animation in milliseconds
            hideDuration: '1000',      // Duration of the notification dismissal animation in milliseconds
            timeOut: '5000',           // Duration before the notification automatically disappears in milliseconds
            extendedTimeOut: '1000',   // Additional duration for the notification when hovered over in milliseconds
            showEasing: 'swing',       // Easing animation for showing the notification ('linear', 'swing')
            hideEasing: 'linear',      // Easing animation for hiding the notification ('linear', 'swing')
            showMethod: 'fadeIn',      // Animation method for showing the notification ('fadeIn', 'slideDown', 'show')
            hideMethod: 'fadeOut',     // Animation method for hiding the notification ('fadeOut', 'slideUp', 'hide')
            tapToDismiss: true,        // Dismiss the notification on click
        };

        // Add this script to handle the toggle functionality
        // document.addEventListener("DOMContentLoaded", function () {
        //     var sidebar = document.getElementById("sidebar");
        //     var content = document.getElementById("main-content");

        //     document.getElementById("sidebar-toggle").addEventListener("click", function () {
        //         if (sidebar.style.width === "250px") {
        //             sidebar.style.width = "0";
        //             content.style.marginLeft = "0";
        //         } else {
        //             sidebar.style.width = "250px";
        //             content.style.marginLeft = "250px";
        //         }
        //     });
        // });

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
</html>
