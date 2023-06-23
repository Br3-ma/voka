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
              
        <script>
            // Hide the preloader when the page finishes loading
            window.addEventListener('load', function() {
                var preloader = document.querySelector('.preloader');
                preloader.style.display = 'none';
            });
        </script>
        {{-- @vite('resources/css/app.css') --}}
        <style>
            /* Styling for the preloader */
            .preloader {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: #fff;
              display: flex;
              justify-content: center;
              align-items: center;
              z-index: 9999;
            }
            .spinner {
            margin: 100px auto;
            width: 40px;
            height: 40px;
            position: relative;
            }
        
            .cube1, .cube2 {
            background-color: #333;
            width: 15px;
            height: 15px;
            position: absolute;
            top: 0;
            left: 0;
            
            -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
            animation: sk-cubemove 1.8s infinite ease-in-out;
            }
        
            .cube2 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
            }
        
            @-webkit-keyframes sk-cubemove {
            25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
            50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
            75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
            100% { -webkit-transform: rotate(-360deg) }
            }
        
            @keyframes sk-cubemove {
                25% { 
                    transform: translateX(42px) rotate(-90deg) scale(0.5);
                    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
                } 50% { 
                    transform: translateX(42px) translateY(42px) rotate(-179deg);
                    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
                } 50.1% { 
                    transform: translateX(42px) translateY(42px) rotate(-180deg);
                    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
                } 75% { 
                    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
                    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
                } 100% { 
                    transform: rotate(-360deg);
                    -webkit-transform: rotate(-360deg);
                }
            }
            body .footer {
            z-index: 1;
            --footer-background:rgb(255, 255, 255);
            display: grid;
            position: relative;
            grid-area: footer;
            min-height: 12rem;
            }
            body .footer .bubbles {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1rem;
            background: var(--footer-background);
            filter: url("#blob");
            }
            body .footer .bubbles .bubble {
            position: absolute;
            left: var(--position, 50%);
            background: var(--footer-background);
            border-radius: 100%;
            -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
                    animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
            transform: translate(-50%, 100%);
            }
            body .footer .content {
            padding: 6rem 1rem 2rem;
            background: var(--footer-background);
            z-index: 2;
            }
            .footer .content .container {
            max-width: 768px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 1.5rem;
            color: #1a1122;
            }

            .content h2 {
            margin-bottom: .25rem;
            font-size: 2.25rem;
            }

            .content span {
            font-size: .875rem;
            }

            .footer__links  {
            display: flex;
            flex-direction: row;
            column-gap: 2rem;
            transition: all 150ms ease-out;
            justify-content: center;
            }

            .footer__links .footer__link {
            transition: all 150ms ease-out;
            display: inline-block;
            }

            .footer__link:hover:after {
                width: 100%;
            }

            .footer__link:after {
                content: '';
                display: block;
                margin: auto;
                height: 2px;
                width: 0px;
                background-color: #fff;
                transition: width .25s ease-out;
            }
            .footer__socials {
            justify-self: flex-end;
            }

            .footer__social {
            font-size: 1.25rem;
            margin-right: 1.5rem;
            }
            .footer__social:hover {
            opacity: 0.8;
            }

            .footer__copy {
            text-align: center;
            background:rgb(255, 0, 0);
            font-size: .875rem;
            text-align: center;
            color: #dcdcdc;
            padding: 3rem 0 2rem;
            }
            @-webkit-keyframes bubble-size {
            0%, 75% {
                width: var(--size, 4rem);
                height: var(--size, 4rem);
            }
            100% {
                width: 0rem;
                height: 0rem;
            }
            }

            @keyframes bubble-size {
            0%, 75% {
                width: var(--size, 4rem);
                height: var(--size, 4rem);
            }
            100% {
                width: 0rem;
                height: 0rem;
            }
            }
            @-webkit-keyframes bubble-move {
            0% {
                bottom: -4rem;
            }
            100% {
                bottom: var(--distance, 10rem);
            }
            }
            @keyframes bubble-move {
            0% {
                bottom: -4rem;
            }
            100% {
                bottom: var(--distance, 10rem);
            }
            }

            @media screen and (max-width: 767px){
            .footer .content {
                padding: 0 1.5rem;
            }
            .footer .content .container {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .content h2 {
                font-size: 1.5rem;
            }

            .content span {
                font-size: .813rem;
            }

            .footer__links  {
                flex-direction: column;
                row-gap: 1.5rem;
            }
            
            .footer__socials {
                justify-self: flex-start;
            }
            }

            @media screen and (max-width: 567px){
            .footer .content .container {
                grid-template-columns: repeat(1, 1fr);
                row-gap: 3.5rem;
            }
            }

          </style>
    </head>
    <body>
        <!-- Preloader HTML -->
        <div class="preloader">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <div class=" text-primary">
            <div class="border py-3 px-6">
                <div class="mx-auto px-8 flex justify-content-center items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <img class="h-10 w-10 text-red-500" src="{{ asset('public/img/logo.png') }}">
                    </a>
            
                    <div class="ml-6 flex flex-1 gap-x-3 mt-2">
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
                
                        <a target="_blank" href="{{ route('categories') }}" class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
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
                    <div class="px-8 mt-4 flex text-white items-center justify-between">
                        <div class="flex gap-x-2 py-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Lusaka, LSK</span>
                        </div>
                
                        <div class="flex gap-x-8">
                            <a href="{{ route('categories', ['category' => 'best_seller']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Best seller</a>
                            <a href="{{ route('categories', ['category' => 'new']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">New Releases</a>
                            <a href="{{ route('categories', ['category' => 'books']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Books</a>
                            <a href="{{ route('categories', ['category' => 'computers']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Computers</a>
                            <a href="{{ route('categories', ['category' => 'fashion']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Fashion</a>
                            <a href="{{ route('categories', ['category' => 'health']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Health</a>
                            <a href="{{ route('categories', ['category' => 'pharmacy']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Pharmacy</a>
                            <a href="{{ route('categories', ['category' => 'toys-games']) }}" class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium">Toys & Games</a>
                        </div>
                
                        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
                    </div>
                @else
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
                    </div>
                @endif
            </div>
        </div>


