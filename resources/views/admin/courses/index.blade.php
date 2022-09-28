<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <section>
        <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4 py-5">
            <div class="container mx-auto sm:px-4">
                <div class="flex flex-wrap  mx-0 justify-center">
                    <div class="section-title text-center relative mb-5">
                        <h1 class="text-4xl">Our Courses</h1>
                        <div class="flex justify-center py-3">
                            <a href="{{Route('admin.courses.create')}}" class="dark:shadow-lg dark:shadow-zinc-800 inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Add Course</a>
                        </div>
                    </div>
                </div>
                @if (count($courses)>0)
                    <div class="flex flex-wrap ">
                        @foreach ($courses as $course)
                        <?php $name = DB::select('select instructor_name from instructors where id ='.$course->instructor_id); ?>
                        <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4 drop-shadow-2xl ">
                            <a class="courses-list-item relative block overflow-hidden mb-2 dark:shadow-lg dark:shadow-zinc-800" href="{{ Route('admin.courses.show',$course->id ) }}">
                                <img class="max-w-full h-auto" src="{{Storage::url($course->course_img)}}" alt="" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                                <div class="courses-text">
                                    <h4 class="text-center text-white px-3 dark:text-gray-200">{{$course->course_name}}</h4>
                                    <div class="border-t w-full mt-3">
                                        <div class="flex flex-row justify-between p-6">
                                            <span class="text-white block dark:text-gray-200"><i class="fa fa-user mr-2"></i>{{{$course->instructor_id}}}</span>
                                            <span class="text-white block dark:text-gray-200"><i class="fa fa-star mr-2"></i>{{rand(3.5,5)}}</span>
                                            <span class="text-white block dark:text-gray-200"><i class="fa fa-user mr-2"></i>{{$name[0]->instructor_name}}</span>
                                            <span class="text-white block dark:text-gray-200"><i class="fa fa-star mr-2"></i>{{$course->course_rate}}</span>
                                                <small class="text-white">({{rand(111,300)}})</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center text-darkblue dark:text-lightblue px-3">No Courses Available</h3>
                @endif


            </div>
        </div>
    </section>
    <!-- Courses Start -->

    <!-- Courses End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/easing/easing.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ URL::to('/') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::to('/') }}/js/main.js"></script>
</x-admin-layout>

