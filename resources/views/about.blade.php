<x-base-layout>
        <!-- Header Start -->
        <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
            <div class="container text-center py-5">
                <h1 class="text-white display-1">About</h1>
                <div class="d-inline-flex text-white mb-5">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-base-partials.3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
                <div class="mx-base-partials.auto mb-5" style="width: 100%; max-base-partials.width: 600px;">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-light bg-white text-body px-base-partials.4 dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Courses</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Courses 1</a>
                                <a class="dropdown-item" href="#">Courses 2</a>
                                <a class="dropdown-item" href="#">Courses 3</a>
                            </div>
                        </div>
                        <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                        <div class="input-group-append">
                            <button class="btn btn-secondary px-base-partials.4 px-base-partials.lg-5">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <x-base-partials.about></x-base-partials.about>
        <x-base-partials.feature></x-base-partials.feature>
        <x-base-partials.testimonial></x-base-partials.testimonial>
</x-base-layout>

