<x-admin-layout>
!
    <div class="flex justify-center border-1 ">
        <form method="POST" action="{{ route('admin.instructors.store')}}" enctype= multipart/form-data>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Instructor Name</label>
                <input id="name" name="name" value="{{old('name')}}" type="text" class="form-control" >

            </div>

            <div class="mb-3">
                <label for="instructor" class="form-label">instructor Email</label>
                <input id="email" name="email" value="{{old('email')}}" type="email" class="form-control">

            </div>

            <div class="mb-3">
                <label for="image" class="form-label">instructor Image</label>
                <input id="image" name="image" type="file" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-admin-layout>
