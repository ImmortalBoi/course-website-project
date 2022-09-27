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
                    <h1 class="text-4xl">Our Instructors</h1>
                    <div class="flex justify-center py-3">
                        <a href="{{ route('admin.instructors.create') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Add Instructor</a>
                    </div>
                </div>
                @if (count($instructors)>0)
                    <div class="grid grid-cols-3 gap-4">
                    @foreach ($instructors as $instructor)

                        <div class="team-item ">
                            <img class="max-w-full h-auto w-full" src="{{ Storage::url($instructor->instructor_img) }}">
                            <div class="bg-gray-100 text-center p-6">
                                <h5 class="mb-3">{{ $instructor->instructor_name }}</h5>
                                <h5 class="mb-3">{{ $instructor->instructor_email }}</h5>
                                <p class="mb-2">Web Design & Development</p>
                                <div class="flex justify-center">
                                    <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>
                @else
                    <h3 class="text-center text-black px-3">No Instructors Available</h3>
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
