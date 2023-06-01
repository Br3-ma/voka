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

        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{ asset('public/img/logo.png') }}">
        <link rel="stylesheet" src="{{ asset('public/assets/css/footer.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        
        {{-- @vite('resources/css/app.css') --}}
    </head>
    <body>

        <div class="text-primary">
            <div class="border py-3 px-6">
                <div class="flex justify-between">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <img class="h-10 w-10 text-red-500" src="{{ asset('public/img/logo.png') }}">
                    </a>
            
                    <div class="ml-6 flex flex-1 gap-x-3">
                        {{-- <div class="flex cursor-pointer select-none items-center gap-x-2 rounded-md border bg-[#4094F7] py-2 px-4 text-white hover:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <span class="text-sm font-medium">Categories</span>
                        </div> --}}
                        <form action="{{ route('search') }}" method="GET" class="w-full">
                            <input type="text" name="query" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" placeholder="Ex. Zanaco" />
                        </form>
                    </div>
            
                    <div class="ml-2 flex">
                        <a href="{{ route('subscription') }}" class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Add a Business</span>
                        </a>
                
                        <a target="_blank" href="{{ route('write-review', 1) }}" class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Write a Review </span>
                        </a>
                        @if (Route::has('login'))
                            @auth
                            <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
                                <a href="{{ url('/user/profile')}}" class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    {{-- <span class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">3</span> --}}
                                </a>
                            </div>                             
                            @else
                                <a href="{{ route('login') }}" class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
                                    <span class="text-sm font-medium">Sign in</span>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-2 bg-primary-500 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-primary-100">
                                        <span class="text-sm font-medium">Sign up</span>
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            
                @if($currentRouteName == 'welcome')
                    <div class="mt-4 flex text-white items-center justify-between">
                        <div class="flex gap-x-2 py-1 px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex gap-x-8">
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Best seller</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">New Releases</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Books</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Computers</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Health</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories') }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Toys & Games</a>
                        </div>
                
                        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
                    </div>
                @else
                    <div class="mt-4 flex text-white items-center justify-between">
                        <div class="flex gap-x-2 py-1 px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm text-blue-400 font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex gap-x-8">
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Best seller</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">New Releases</a>
                            <a href="{{ route('categories') }}" class="text-slate-700 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Books</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Computers</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Health</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories') }}" class="text-slate-800 cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Toys & Games</a>
                        </div>
                
                        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
                    </div>
                @endif
            </div>
        </div>

