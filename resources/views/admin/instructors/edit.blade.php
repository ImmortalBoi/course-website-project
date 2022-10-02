@section('title','Instructor Details')
<x-admin-layout>

    <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4 py-5">
        <form action="{{Route('admin.instructors.update',$instructor->id)}}" method="POST" enctype= multipart/form-data class="flex flex-col">
            @csrf @method('PUT')

            <div class="mb-6">
                <label for="name" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Instructor Name</label>
                <input id="name" name="name" value="{{$instructor->instructor_name}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light" >
            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">instructor Email</label>
                <input id="email" name="email" value="{{$instructor->instructor_email}}" type="email" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="mb-6">
                <label for="jobTitle" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">instructor Job Title</label>
                <input id="jobTitle" name="jobTitle" value="{{$instructor->instructor_job_title}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="input-group mb-6">
                <label for="phone" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">instructor Phone Number</label>
                <span class="input-group-text" id="basic-addon1">+20</span>
                <input id="phone" name="phone" placeholder="0xxxxxxxxxxx" value="{{$instructor->instructor_phone_number}}" aria-describedby="basic-addon1" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="mb-6 ">
                <label for="image" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">instructor Image</label>
                <input id="image" name="image" type="file" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Related Courses</label>
                <ul class="list-group list-group-flush">
                    @if ($courses)
                        @foreach ($courses as $course)
                            <li class="flex flex-row justify-between relative block py-3 px-6 -mb-px border rounded my-1 border-gray-300 no-underline flex justify-between items-start">
                                <h1 class="py-1.5 font-bold">{{$course->course_name}}</h1>
                                <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-teal-500 text-white hover:bg-teal-600" href="{{Route('admin.courses.show',$course->id)}}">View</a>
                            </li>
                        @endforeach
                        @else
                        <li class="list-group-item">No Related Courses</li>
                    @endif
                </ul>
            </div>


            <div class="flex flex-row justify-between">
                <button type="submit" name="submit" class="self-end inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Update</button>
                <button name="BackBtn" type="button" class="inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" onclick="history.back()">
                    Back</button>
            </div>

        </form>
    </div>

</x-admin-layout>
