<x-admin-layout>

    <div >
        <form method="POST" action="{{ route('admin.instructors.store')}}" enctype= multipart/form-data class="flex flex-col">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Instructor Name</label>
                <input id="name" name="name" value="{{old('name')}}" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-gray-900">instructor Email</label>
                <input id="email" name="email" value="{{old('email')}}" type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-lg font-medium text-gray-900">instructor Image</label>
                <input id="image" name="image" type="file" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            </div>

            <button type="submit" name="submit" class="self-end inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
        </form>
    </div>

</x-admin-layout>
