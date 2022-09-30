@section('frontTitle','| Course Details')
<x-base-layout>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Course Detail</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ URL::to('/') }}/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Detail</p>
            </div>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ URL::to('/') }}/#">Courses 1</a>
                            <a class="dropdown-item" href="{{ URL::to('/') }}/#">Courses 2</a>
                            <a class="dropdown-item" href="{{ URL::to('/') }}/#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    {{-- Photo and lorem --}}
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                            <h1 class="display-4">{{ $course->course_name }}</h1>
                        </div>
                        <img class="img-fluid rounded mb-4" src="{{ Storage::url($course->course_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';" style="width: 1366px; height:368px;">
                        <p>{{ $course->course_description }}</p>

                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                    </div>
                    {{--End Photo and lorem --}}

                    {{-- Related Courses --}}
                    <?php $Related= DB::table('courses')->where('category_id',$course->category_id)->where('id','!=',$course->id)->get(); ?>
                    <h2 class="mb-3">Related Courses</h2>
                    @if ($Related)
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        @foreach ($Related as $course)
                        <?php $instructor =DB::select('select instructor_name from instructors where id = '.$course->instructor_id) ?>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{ Route('course.show',$course->id ) }}">
                            <img class="img-fluid" src="{{ Storage::url($course->course_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">{{$course->course_name}}</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>{{$instructor[0]->instructor_name}}</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>{{$course->course_rate}}
                                            <small>({{rand(100,150)}})</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    @endif
                    {{--End Related Courses --}}
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    {{-- Course Details --}}
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Instructor</h6>
                            <h6 class="text-white my-3">{{ $Targetinstructor->instructor_name }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Rating</h6>
                            <h6 class="text-white my-3">{{ $course->course_rate }}<small>({{rand(100,150)}})</small></h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Lectures</h6>
                            <h6 class="text-white my-3">{{ $course->course_lectures }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">{{ $course->course_duration}}Hrs</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Skill level</h6>
                            <h6 class="text-white my-3">{{ $course->course_level }}</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Language</h6>
                            <h6 class="text-white my-3">{{ $course->course_language }}</h6>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: ${{ $course->course_price }}</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="{{ URL::to('/') }}/">Enroll Now</a>
                        </div>
                    </div>
                    {{--End Course Details --}}

                    {{-- categories --}}
                    @if ($categories)
                    <div class="mb-5">
                        <h2 class="mb-3">Categories</h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none h6 m-0">{{$category->category_name}}</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{-- End categories --}}

                    {{-- Recent Courses --}}
                    <?php $recent= DB::table('courses')->latest()->limit(2)->get(); ?>
                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        @foreach ($recent as $course)
                        <?php $instructory =DB::select('select instructor_name from instructors where id = '.$course->instructor_id) ?>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="{{ Route('course.show',$course->id ) }}">
                            <img class="img-fluid rounded" width="100" height="100" src="{{ Storage::url($course->course_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                            <div class="pl-3">
                                <h6>{{$course->course_name}}</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>{{$instructory[0]->instructor_name}}</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>{{$course->course_rate}} ({{rand(100,150)}})</small>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    {{--End Recent Courses --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

</x-base-layout>

