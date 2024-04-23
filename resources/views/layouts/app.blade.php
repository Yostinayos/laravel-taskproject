<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/b4a141d0bd.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css' , 'resources/js/app.js' , 'resources/js/dark.js'])
    </head>
    <body class="overflow-hidden font-sans antialiased dark:bg-black dark:text-white/50">
       <div style="height: 100vh">
        <div class="grid grid-flow-col w-full h-full">
            <div class="flex h-full grid-cols-4  bg-gray-50 dark:bg-gray-800   place-items-start py-4 ">
                <x-right-side/>
                
            </div>
            <div class=" grid-cols-6 grid place-items-center  bg-gray-200 dark:bg-gray-900 overflow-scroll ">{{$slot}}</div>
            <div class=" h-full grid-cols-2  bg-gray-50 dark:bg-gray-800    place-items-center">
                <x-left-side />
            </div>
          </div>
       </div>
    </body>
</html>
