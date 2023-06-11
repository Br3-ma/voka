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
            .top-top-nav{
                border-radius: 0px;
                background: #60007a;
                box-shadow: inset 15px 15px 23px #2f003c,
                            inset -15px -15px 23px #9100b8;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
            <!-- Dashboard -->
            @include('layouts.__partials.navbar')
            <div class="d-flex w-full h-lg-full bg-surface-secondary">
                <!-- Vertical Navbar -->
                <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
                    <div class="container-fluid">
                        <!-- Toggler -->
                        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- User menu (mobile) -->
                        <div class="navbar-user d-lg-none">
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <!-- Toggle -->
                                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar-parent-child">
                                        <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    <a href="#" class="dropdown-item">Billing</a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse -->
                        <div class="sticky top-0 collapse navbar-collapse" id="sidebarCollapse">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
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
                            <!-- Divider -->
                            <hr class="navbar-divider my-5 opacity-20">
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
                            <!-- Push content down -->
                            <div class="mt-auto"></div>
                            <!-- User (md) -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-person-square"></i> Account
                                    </a>
                                </li>
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
                        </div>
                    </div>
                </nav>

                <!-- Page Content -->
                <main class="w-full">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

</html>
