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
        </style>
    </head>
    <body class="font-sans antialiased">
            <!-- Banner -->
            <a href="https://webpixels.io/components?ref=codepen" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">
                <strong>Crafted with Webpixels CSS:</strong> The design system for Bootstrap 5. Browse all components →
            </a>
            
            <!-- Dashboard -->
            <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
                <!-- Vertical Navbar -->
                <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
                    <div class="container-fluid">
                        <!-- Toggler -->
                        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Brand -->
                        <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                            Vokamba
                            {{-- <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="..."> --}}
                        </a>
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
                        <div class="collapse navbar-collapse" id="sidebarCollapse">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-house"></i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('manage-business')}}">
                                        <i class="bi bi-bar-chart"></i> Business/ Company
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-bar-chart"></i> Reviews
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-bar-chart"></i> Business Categories
                                    </a>
                                </li>
                                {{--<li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-bar-chart"></i> Analitycs
                                    </a>
                                </li>
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
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

</html>
