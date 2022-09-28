@section('title','Course Details')
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
                            <h6 class="text-white my-3">{{$instructor->instructor_name}}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Rating</h6>
                            <h6 class="text-white my-3">{{$course->course_rate}}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Lectures</h6>
                            <h6 class="text-white my-3">{{$course->course_lectures}}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">{{$course->course_duration}}Hrs</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Skill level</h6>
                            <h6 class="text-white my-3">{{$course->course_level}}</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Language</h6>
                            <h6 class="text-white my-3">{{$course->course_language}}</h6>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: ${{$course->course_price}}</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="{{Route('admin.courses.edit',['course' => $course->id]) }}"">Edit</a>
                            <form action="{{ Route('admin.courses.destroy',['course' => $course->id])}}"
                                 method="POST"
                                 onsubmit="return confirm('Are You Sure?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    {{--End Course Details --}}


                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

</x-admin-layout>

