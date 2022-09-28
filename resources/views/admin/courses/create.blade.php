<x-admin-layout>

    <div>
        <form action="{{Route('admin.courses.store')}}" method="POST" enctype= multipart/form-data>
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Course Name: </label>
                <input id="name" name="name" value="{{old('name')}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light" >

            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-gray-900">Instructor:</label>
                <input id="instructor_id" name="instructor_id" value="{{old('instructor_id')}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">

            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-lg font-medium text-gray-900">Course Image</label>
                <input id="image" name="image" type="file" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="mb-6">
                <label for="price" class="block mb-2 text-lg font-medium text-gray-900">Course Price</label>
                <input id="price" name="prce" value="{{old('price')}}" type="text" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light">
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-lg font-medium text-gray-900">Course Description</label>
                <textarea id="description" name="description" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:drop-shadow-2xl-light"></textarea>
            </div>

            <button type="submit" name="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
        </form>
    </div>

</x-admin-layout>
