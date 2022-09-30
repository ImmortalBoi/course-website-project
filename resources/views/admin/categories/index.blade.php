@section('title', 'Category')
<x-admin-layout>

    <div class="flex flex-wrap  mx-0 justify-center">
        <div class="section-title text-center relative mb-3">
            <h1 class="text-4xl">Our Categories</h1>
            <div class="flex justify-center py-3">
                <button class="inline-block align-middle text-center select-none border border-blue-600 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700"
                type="button" data-modal-toggle="authentication-modal">
                    Add Category
                </button>
            </div>
        </div>
    </div>

<!-- Modal toggle -->

<!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8 flex flex-col">
                    <h5 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Category</h5>
                    <div class="modal-body">
                    <form action="{{ Route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Category Name:
                            </label>

                            <input id="name" name="name" value="{{ old('name') }}" type="text"
                                class="@error('name') bg-red-700  @enderror drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                                <p class="text-red-600 py-2"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit"
                            class="place-self-end inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="shadow-lg shadow-zinc-800 overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Related Courses
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($categories as $category)
                <?php
                $courses = DB::select('select course_name from courses where category_id =' . $category->id);
                ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $i++ }}
                    </th>

                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->category_name }}
                    </td>

                    <td class="py-4 px-6">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="drop-shadow-2xl border dark:border-blue-600 text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Related Courses <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                @if ($courses)
                                    @foreach ($courses as $course)
                                        <li><a class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="#">{{ $course->course_name }}</a></li>
                                    @endforeach
                                    @else
                                    <li class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">No Related Courses</li>
                                @endif
                            </ul>
                        </div>
                    </td>

                    <td class="py-4 px-6 relative inline-flex align-middle">
                        <a type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900"
                        href="{{ Route('admin.categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ Route('admin.categories.destroy', $category->id) }}" method="POST"
                            onsubmit="return confirm('Delete {{ $category->category_name }}  Category?');">
                            @csrf @method('DELETE')
                            <button
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</x-admin-layout>
