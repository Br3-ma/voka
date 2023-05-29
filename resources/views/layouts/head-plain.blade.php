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
        <script src="https://cdn.tailwindcss.com"></script>


        {{-- @vite('resources/css/app.css') --}}
    </head>
    <body>
        <div class="text-primary">
            <div class="border py-3 px-6">
                <div class="flex justify-between">
                    <a href="{{ route('welcome') }}"  class="flex items-center">
                        <img class="h-10 w-10 text-red-500" src="{{ asset('public/img/logo.png') }}">
                        <span class="ml-2 font-semibold text-purple-800">Vookamba</span>
                    </a>
            
                    
                </div>
            
                
            </div>
        </div>


