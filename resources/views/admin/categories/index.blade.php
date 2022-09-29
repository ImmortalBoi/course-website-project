<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


@section('title','Category')
<x-admin-layout>

    <div class="flex flex-wrap  mx-0 justify-center">
        <div class="section-title text-center relative mb-3">
            <h1 class="text-4xl">Our Categories</h1>
            <div class="flex justify-center py-3">
                <button type="button" class="btn btn-primary dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Category
                </button>
            </div>
        </div>
    </div>

    <!-- Create Form -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{Route('admin.categories.store')}}" method="POST">
                @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Category Name: </label>

                        <input id="name" name="name" value="{{old('name')}}" type="text" class="@error('name') is-invalid  @enderror drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        @error('name')
                                <p class="text-danger py-2"> {{$message}}</p>
                        @enderror
                    </div>

            </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!-- End Create Form -->


    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Related Courses</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $i =1; ?>
            @foreach ($categories as $category)
            <?php
            $courses = DB::select('select course_name from courses where category_id ='.$category->id);
            ?>
          <tr>
            <th scope="row">{{$i++}}</th>

            <td>{{$category->category_name}}</td>

            <td>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Related Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @if($courses)
                            @foreach ($courses as $course)
                            <li><a class="dropdown-item" href="#">{{$course->course_name}}</a></li>
                            @endforeach
                            @else
                            <li class="dropdown-item">No Related Courses</li>
                        @endif
                    </ul>
                  </div>
            </td>

            <td>
                <div class="btn-group" >
                    <a class="btn btn-warning" href="{{Route('admin.categories.edit',$category->id)}}">Edit</a>
                    <form action="{{Route('admin.categories.destroy',$category->id)}}" method="POST" onsubmit="return confirm('Delete {{$category->category_name}}  Category?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </td>

          </tr>
        @endforeach
        </tbody>
    </table>

</x-admin-layout>
