@section('title','Course Details')
<x-admin-layout>

    <!-- Detail Start -->
    <div class="container mx-auto mx-auto max-w-full mx-auto">
        <div class="container mx-auto py-5">
            <div class="flex flex-wrap ">
                <div class="lg:w-2/3 pr-4 pl-4">
                    {{-- Name,Photo and Discription --}}
                    <div class="flex flex-col mb-5">
                        <div class="section-title relative mb-5">
                            <h6 class="inline-block relative text-gray-600 uppercase pb-2">Course Detail</h6>
                            <h1 class="text-4xl">{{ $course->course_name }}</h1>
                        </div>
                        <div class="relative w-[500px]">
                            <img class="w-[1366px] h-[368] rounded mb-4 shadow-lg shadow-zinc-800" src="{{ Storage::url($course->course_img) }}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';"/>
                            <div class="absolute bottom-0 left-0 right-0 p-6 container mx-auto sm:px-4 mx-auto sm:px-4 border-xl shadow-lg shadow-zinc-800 bg-slate-200 w-3/4 mb-6 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <p class=" "> {{ $course->course_description }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- End Name,Photo and Discription --}}

                </div>

                <div class="lg:w-1/3 pr-4 pl-4 mt-5 lg:mt-0">

                    {{-- Course Details --}}
                    <div class="bg-lightblue mb-5 py-3 shadow-lg shadow-zinc-800 dark:bg-gray-800 dark:border-gray-700" >
                        <h3 class="text-darkblue py-3 px-4 m-0 dark:text-gray-300">Course Features</h3>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Category</h6>
                            @if($category)
                            <h6 class="text-white my-3 pl-2">{{ $category->category_name }}</h6>
                            @else
                            <h6 class="text-white my-3 pl-2">{{'---'}}</h6>
                            @endif
                        </div>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Instructor</h6>
                            <h6 class="text-white my-3 pl-2">{{ $instructor->instructor_name }}</h6>
                        </div>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Rating</h6>
                            <h6 class="text-white my-3 pl-2">{{ $course->course_rate }}</h6>
                        </div>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Lectures</h6>
                            <h6 class="text-white my-3 pl-2">{{ $course->course_lectures }}</h6>
                        </div>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Duration</h6>
                            <h6 class="text-white my-3 pl-2">{{ $course->course_duration }}Hrs</h6>
                        </div>
                        <div class="flex justify-between border-b px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Skill level</h6>
                            <h6 class="text-white my-3 pl-2">{{ $course->course_level }}</h6>
                        </div>
                        <div class="flex justify-between px-4">
                            <h6 class="text-darkblue my-3 dark:text-gray-300">Language</h6>
                            <h6 class="text-white my-3 pl-2">{{ $course->course_language }}</h6>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: ${{ $course->course_price }}</h5>

                        <div class="flex px-4">
                            @if ($course->is_active)
                                <label class="justify-self-end inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline
                                hover:text-green-500 hover:border-green-500 hover:bg-white
                                bg-green-500 text-white bg-white" for="success-outlined">Currently Active</label>
                            @else
                                <label class="justify-self-end inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline
                                hover:text-red-600 hover:border-red-600 hover:bg-white
                                bg-red-600 text-white bg-white" for="danger-outlined">Currently Inactive</label>
                            @endif
                        </div>

                        <div class="py-3 px-4 flex flex-col ">
                            <a class="inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-yellow-600 text-white hover:bg-yellow-700 bg-white shadow-lg shadow-zinc-800" href="{{Route('admin.courses.edit',['course' => $course->id]) }}">Edit</a>
                            <form action="{{ Route('admin.courses.destroy',['course' => $course->id])}}"
                                method="POST"
                                onsubmit="return confirm('Delete {{$course->course_name}} Course?');">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="my-1 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 bg-white shadow-lg shadow-zinc-800"
                                    type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    {{-- End Course Details --}}


                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

</x-admin-layout>
