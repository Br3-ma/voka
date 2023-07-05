<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vookamba</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>


        {{-- @vite('resources/css/app.css') --}}
              
        @livewireStyles
        <script>
            // Hide the preloader when the page finishes loading
            window.addEventListener('load', function() {
                var preloader = document.querySelector('.preloader');
                preloader.style.display = 'none';
            });
        </script>
        <style>
               body{
                    font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
                }
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

            /* Shake effect */
            @keyframes shake {
                0% { transform: translateX(0); }
                20% { transform: translateX(-10px); }
                40% { transform: translateX(10px); }
                60% { transform: translateX(-10px); }
                80% { transform: translateX(10px); }
                100% { transform: translateX(0); }
            }

            .shake {
                animation: shake 0.5s;
            }
            .PillList-item {
  cursor: pointer;
  display: inline-block;
  float: left;
  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
  margin: 0 12px 12px 0;
  text-transform: capitalize;
}

.PillList-item input[type="checkbox"] {
  display: none;
}
.PillList-item input[type="checkbox"]:checked + .PillList-label {
  background-color: #1da1f2;
  border: 1px solid #1da1f2;
  color: #fff;
  padding-right: 16px;
  padding-left: 16px;
}
.PillList-label {
  border: 1px solid #1da1f2;
  border-radius: 20px;
  color: #1c94e0;
  display: block;
  padding: 7px 28px;
  text-decoration: none;
}
.PillList-item
  input[type="checkbox"]:checked
  + .PillList-label
  .Icon--checkLight {
  display: inline-block;
}
.PillList-item input[type="checkbox"]:checked + .PillList-label .Icon--addLight,
.PillList-label .Icon--checkLight,
.PillList-children {
  display: none;
}
.PillList-label .Icon {
  width: 12px;
  height: 12px;
  margin: 0 0 0 12px;
}
.Icon--smallest {
  font-size: 12px;
  line-height: 12px;
}
.Icon {
  background: transparent;
  display: inline-block;
  font-style: normal;
  vertical-align: baseline;
  position: relative;
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


