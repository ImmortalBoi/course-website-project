@section('title','Instructors')
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <section>
        <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4 py-5">
            <div class="container mx-auto sm:px-4 py-5">
                <div class="section-title text-center relative mb-5">
                    <h1 class="text-4xl drop-shadow-2xl">Our Instructors</h1>
                    <div class="flex justify-center py-3">
                        <a href="{{ route('admin.instructors.create') }}" class="dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Add Instructor</a>
                    </div>
                </div>
                @if (count($instructors)>0)
                    <div class="grid grid-cols-3 gap-4">
                    @foreach ($instructors as $instructor)
                    <div class="flex flex-col overflow-auto drop-shadow-2xl bg-gray-100 dark:shadow-lg dark:shadow-zinc-800 dark:bg-gray-800">
                        <img class="w-auto h-1/2" src="{{ Storage::url($instructor->instructor_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                        <div class="flex flex-col items-center justify-center bg-gray-100 text-center p-6 dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-3">{{ $instructor->instructor_name }}</h5>
                            <h5 class="mb-3">{{ $instructor->instructor_email }}</h5>
                            <p class="mb-2">{{$instructor->instructor_job_title}}</p>
                            <div class="flex justify-center">
                                <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="grid grid-cols-2 gap-6 ">
                                <a href="{{Route('admin.instructors.edit',$instructor->id) }}" type="submit" name="submit" class=" btn text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Edit</a>
                                <form action="{{ Route('admin.instructors.destroy',$instructor->id)}}"
                                    method="POST"
                                    onsubmit="return confirm('Delete {{$instructor->instructor_name}} Instructor? All Related Courses Will Be Deleted As Well');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn   text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                @else
                    <h3 class="text-center text-darkblue dark:text-gray-200 px-3">No Instructors Available</h3>
                @endif

            </div>
        </div>


    </section>

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
