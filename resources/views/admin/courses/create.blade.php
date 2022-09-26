<x-admin-layout>

    <div class="flex justify-center border-1 ">
        <form method="POST" action="{{ route('admin.courses.store')}}" enctype= multipart/form-data>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input id="name" name="name" value="{{old('name')}}" type="text" class="form-control" >

            </div>

            <div class="mb-3">
                <label for="instructor" class="form-label">instructor</label>
                <input id="instructor_id" name="instructor_id" value="{{old('instructor_id')}}" type="text" class="form-control">

            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Course Image</label>
                <input id="image" name="image" type="file" class="form-control">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Course Price</label>
                <input id="price" name="price" value="{{old('price')}}" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-admin-layout>
