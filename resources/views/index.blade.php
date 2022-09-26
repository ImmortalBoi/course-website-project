<x-base-layout>
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
            <h1 class="text-white display-1 mb-5">Education Courses</h1>
            <div class="mx-partialsauto mb-5" style="width: 100%; max-partialswidth: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-partials4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-partials4 px-partialslg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <x-partials.about></x-partials.about>
    <x-partials.feature></x-partials.feature>
    <x-partials.course></x-partials.course>
    <x-partials.team></x-partials.team>
    <x-partials.testimonial></x-partials.testimonial>
    <x-partials.contact></x-partials.contact>
</x-base-layout>
