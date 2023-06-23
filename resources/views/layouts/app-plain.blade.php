<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Vookamba') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="icon" type="image/png" href="{{ asset('public/img/logo.png') }}">
        <link rel="stylesheet" src="{{ asset('public/assets/css/footer.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
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
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Page Content -->
        <main class="w-full">
            {{ $slot }}
        </main>
        @stack('modals')

        @livewireScripts
    </body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#select-profile-pic-user').change(function(){
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

    </script>
</html>
