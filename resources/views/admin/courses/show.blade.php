<x-admin-layout>

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    {{-- Name,Photo and Discription --}}
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                            <h1 class="display-4">{{$course->course_name}}</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{Storage::url($course->course_img)}}">
                        <p>{{$course->course_description}}</p>
                    </div>
                    {{--End Name,Photo and Discription --}}

                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">

                    {{-- Course Details --}}
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Instructor</h6>
                            <h6 class="text-white my-3">John Doe</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Rating</h6>
                            <h6 class="text-white my-3">4.5 <small>(250)</small></h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Lectures</h6>
                            <h6 class="text-white my-3">15</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">10.00 Hrs</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Skill level</h6>
                            <h6 class="text-white my-3">All Level</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Language</h6>
                            <h6 class="text-white my-3">English</h6>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: ${{$course->course_price}}</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="{{ URL::to('/') }}/">Edit</a>
                            <a class="btn btn-block btn-danger py-3 px-5" href="{{ URL::to('/') }}/">Delete</a>
                        </div>
                    </div>
                    {{--End Course Details --}}


                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

</x-admin-layout>

