<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
            <h1 class="display-4">Meet Our Instructors</h1>
        </div>
        <?php $instructors = DB::table('instructors')->get(); ?>
        @if ($instructors)
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            @foreach ($instructors as $instructor)
            <div class="team-item">
                <img class="img-fluid w-100" src="{{ Storage::url($instructor->instructor_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                <div class="bg-light text-center p-4">
                    <h5 class="mb-3">{{ $instructor->instructor_name }}</h5>
                    <p class="mb-2">{{$instructor->instructor_job_title}}</p>
                    <div class="d-flex justify-content-center">
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
        @endif

    </div>
</div>
<!-- Team End -->
