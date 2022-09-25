<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
<section>
    <!-- Favicon -->
    <link href="{{ URL::to('/') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::to('/') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::to('/') }}/css/style.css" rel="stylesheet">


    <!-- Courses Start -->
    <div class="container-fluid ">
        <div class="container ">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h1 class="display-4">Our Courses</h1>
                        <a href="{{Route('courseControl.create')}}" class="btn btn-primary">Add Course</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-1.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-2.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-3.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-4.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-5.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                        <img class="img-fluid" src="img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development courses for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
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

