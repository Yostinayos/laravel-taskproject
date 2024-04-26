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
        <div class="grid w-full h-full grid-cols-12">
            <div class="h-full col-span-3 px-2 py-2 bg-white rounded-md dark:bg-gray-900 place-items-start">
                <x-right-side/>
                
            </div>
            <div class="col-span-8 overflow-scroll bg-inherit dark:bg-gray-600">{{$slot}}</div>
            <div class="h-full col-span-1 bg-white dark:bg-gray-900 place-items-center">
                <x-left-side />
            </div>
          </div>
       </div>
    </body>
</html>
