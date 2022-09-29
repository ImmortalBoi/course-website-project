<?php
    $selected = "block px-4 py-2 mt-2 text-sm font-semibold text-white bg-blue-400 rounded-lg
    dark:bg-gray-500 dark:hover:bg-gray-400 dark:focus:bg-gray-400 dark:focus:text-white dark:hover:text-white dark:text-white
    hover:text-white focus:text-white-900 hover:bg-blue-400 focus:bg-blue-500 focus:outline-none focus:shadow-outline";

    $notSelected = "block px-4 py-2 mt-2 text-sm font-semibold text-darkblue bg-transparent rounded-lg
    dark:text-gray-400 dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-500 dark:hover:bg-gray-500
    hover:text-gray-900 focus:text-white-900 hover:bg-blue-400 focus:bg-blue-400 focus:outline-none focus:shadow-outline";

    // px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg
    // dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600

    // hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline

    $path = Request::path();

    $mode = App\Http\Controllers\darkModeController::getMode();


?>

<!DOCTYPE html>
<html id="main" class="{{$mode}}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ URL::to('/') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Favicon -->
        <link href="{{ URL::to('/') }}/img/favicon.ico" rel="icon">

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased bg-slate-100 text-darkblue dark:bg-zinc-900 dark:text-gray-200">
        <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
            <div @click.away="open = false" class="bg-lightblue flex flex-col flex-shrink-0 w-full text-darkblue md:w-64 dark:text-gray-200 dark:bg-darkblue" x-data="{ open: false }">
                <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                    <i class="fa fa-book-reader mr-3"></i>
                    <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">Course Forum</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                        <a class="{{(strpos($path,"course"))?$selected:$notSelected}}" href="{{Route('admin.courses.index')}}">Courses</a>
                        <a class="{{(strpos($path,"categories"))?$selected:$notSelected}}" href="{{Route('admin.categories.index')}}">Category</a>
                        <a class="{{(strpos($path,"instructor"))?$selected:$notSelected}}" href="{{Route('admin.instructors.index')}}">Instructors</a>
                        <a class="{{(strpos($path,"about"))?$selected:$notSelected}}" href="#">About</a>
                        <a class="{{(strpos($path,"messages"))?$selected:$notSelected}}" href="{{Route('messages')}}">Contact</a>
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click ="open = !open" class="flex flex-row items-center w-full text-left {{"md:".$notSelected}}">
                                <span>{{ Auth::user()->name }}</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Edit Profile</a>
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('main') }}">Main Page</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <a href="/darkModeToggle" id="myBtn" type="submit" class="m-4 dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-sky-200 text-darkblue hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Toggle</a>
                    </nav>
            </div>
            <main class="m-2 p-8 w-full max-w-5xl">
                {{$slot}}
            </main>

        </div>


    {{-- <script src="{{ URL::to('/') }}/js/app.js" ></script> --}}
    <!-- JavaScript Libraries -->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/easing/easing.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::to('/') }}/js/main.js"></script>
    </body>
</html>
