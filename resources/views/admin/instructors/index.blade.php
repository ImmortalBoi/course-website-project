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

    <div class="flex justify-content-center py-3">
        <a href="{{route('admin.instructors.create')}}" class="btn btn-primary">Add Instructor</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Picture</th>
          </tr>
        </thead>
        <tbody>
            @if ($instructors)
            <?php $i=1; ?>
                @foreach ($instructors as $instructor)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$instructor->instructor_name}}</td>
                        <td>{{$instructor->instructor_email}}</td>
                        <td>
                            <img src="{{ Storage::url($instructor->image) }}" class="w-18 h-18 rounded">
                        </td>
                    </tr>
                @endforeach
            {{-- @else
            <h4 class="text-center text-white px-3">No Instructors Available</h4> --}}
            @endif


        </tbody>
      </table>

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

