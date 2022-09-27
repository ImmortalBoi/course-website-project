<x-admin-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @if($data)

            <form class="row g-">
            @foreach ($data as $dt)
            <div class="container border border-4 w-75 ">
                <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{$dt->name}}" disabled>
                </div>

                <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" value="{{$dt->email}}" disabled>
                </div>

                <div class="col-12">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" value="{{$dt->subject}}" disabled>
                </div>

                <div class="col-12">
                <label for="inputAddress2" class="form-label">Message</label>
                <textarea class="form-control" disabled>{{$dt->message}}</textarea>
                </div>
            </div>
        @endforeach
            </form>

    @else
    <p>No Messages To Show</p>
    @endif



</x-admin-layout>
