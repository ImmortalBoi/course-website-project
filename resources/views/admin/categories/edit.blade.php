{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

@section('title','Edit Category')
<x-admin-layout>

    <div class="container mx-auto sm:px-4 mx-auto sm:px-4 max-w-full w-1/2 mx-auto sm:px-4 py-5">
        <form action="{{Route('admin.categories.update',$category->id)}}" method="POST"  class="flex flex-col">
            @csrf @method('PUT')

            <div class="mb-6">
                <label for="name" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Category Name</label>
                <input id="name" name="name" value="{{$category->category_name}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light" >
            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Related Courses</label>
                <ul class="flex flex-col pl-0 mb-0 border rounded border-gray-300 ">
                    @if ($courses)
                        @foreach ($courses as $course)
                            <li class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline flex justify-between items-start">
                                <div>
                                    {{$course->course_name}}
                                </div>
                                <div class="relative inline-flex align-middle py-1 px-2 leading-tight text-xs " role="group">
                                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-teal-500 text-white hover:bg-teal-600" href="{{Route('admin.courses.show',$course->id)}}">View</a>
                                </div>
                            </li>
                        @endforeach
                        @else
                        <li class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline">No Related Courses</li>
                    @endif
                  </ul>
            </div>

            <div class="Back">
                <button name="BackBtn" type="button" style="color: white;
                padding: 8px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                display: inline-block; font-size: 16px; float: right; border-radius: 8px; background-color: black;" onclick="history.back()">Back</button>
                <button type="submit" name="submit" class="self-end inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Update</button>
            </div>

        </form>
    </div>

</x-admin-layout>
