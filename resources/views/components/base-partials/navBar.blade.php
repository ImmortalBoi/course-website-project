@php
    $path = Request::path();
    $pathResult =  ($path == "")?"active":"";
@endphp
<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5 dark:bg-dark">
        {{$pathResult}}
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary dark:text-dark"><i class="fa fa-book-reader mr-3"></i>Course Forum</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ URL::to('/') }}/" class="nav-item nav-link {{($path == "")?"active":"";}}"><i class="fa-solid fa-house pr-1"></i> Home</a>
                <a href="{{ URL::to('/') }}/about" class="nav-item nav-link {{($path == "about")?"active":"";}}">About</a>
                <a href="{{Route('course.index')}}" class="nav-item nav-link {{($path == "course")?"active":"";}}">Courses</a>
                <a href="{{ URL::to('/') }}/team" class="nav-item nav-link {{($path == "team")?"active":"";}}">Instructors</a>
                <a href="{{ URL::to('/') }}/contact" class="nav-item nav-link {{($path == "contact")?"active":"";}}">Contact</a>
                @if(!isset(Auth::user()->is_student))
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                @endif
            </div>
            @if(isset(Auth::user()->is_student) || isset(Auth::user()->is_admin) )
                @if (Auth::user()->is_student)
                <a href="{{Route('profile')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @endif

                @if (Auth::user()->is_admin)
                <a href="{{Route('admin.index')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Dashboard</a>
                @endif
                @else
                <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block nav-item nav-link">Join Us</a>
            @endif
        </div>
    </nav>
</div>
<!-- Navbar End -->
