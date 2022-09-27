<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
<section>

    <!-- Courses Start -->
    <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4 ">
        <div class="container mx-auto sm:px-4 ">
            <div class="flex flex-wrap  mx-0 justify-center">
                <div class="lg:w-2/3 pr-4 pl-4">
                    <div class="section-title text-center relative mb-5">
                        <h1 class="text-4xl">Our Courses</h1>
                        <a href="{{Route('courseControl.create')}}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Add Course</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap ">
                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-1.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-3.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-3.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-4.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-5.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 pb-4">
                    <a class="courses-list-item relative block overflow-hidden mb-2" href="detail.html">
                        <img class="max-w-full h-auto" src="img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-t w-full mt-3">
                                <div class="flex justify-between p-6">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <nav aria-label="Page navigation">
                        <ul class="flex list-reset pl-0 rounded text-xl justify-center mb-0">
                        <li class="page-item opacity-75">
                            <a class="relative block py-2 px-3 -ml-px leading-normal text-blue bg-white border border-gray-200 no-underline hover:text-blue-800 hover:bg-gray-200 rounded-none" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="relative block py-2 px-3 -ml-px leading-normal text-blue bg-white border border-gray-200 no-underline hover:text-blue-800 hover:bg-gray-200" href="#">1</a></li>
                        <li class="page-item"><a class="relative block py-2 px-3 -ml-px leading-normal text-blue bg-white border border-gray-200 no-underline hover:text-blue-800 hover:bg-gray-200" href="#">2</a></li>
                        <li class="page-item"><a class="relative block py-2 px-3 -ml-px leading-normal text-blue bg-white border border-gray-200 no-underline hover:text-blue-800 hover:bg-gray-200" href="#">3</a></li>
                        <li class="page-item">
                            <a class="relative block py-2 px-3 -ml-px leading-normal text-blue bg-white border border-gray-200 no-underline hover:text-blue-800 hover:bg-gray-200 rounded-none" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                            </a>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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
</section>
</x-admin-layout>
