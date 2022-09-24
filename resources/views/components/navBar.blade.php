<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Course Forum</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ URL::to('/') }}/" class="nav-item nav-link active">Home</a>
                <a href="{{ URL::to('/') }}/about" class="nav-item nav-link">About</a>
                <a href="{{ URL::to('/') }}/course" class="nav-item nav-link ">Courses</a>
                <a href="{{ URL::to('/') }}/team" class="nav-item nav-link">Instructors</a>
                <a href="{{ URL::to('/') }}/contact" class="nav-item nav-link">Contact</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            </div>
            <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->
