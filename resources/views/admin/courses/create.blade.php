<x-admin-layout>

    <div class="flex justify-center ">
        <form action="{{Route('courseControl.store')}}" method="post">
            @csrf
            <div class="mb-6">
                <label for="computer-name" class="block mb-2 text-lg font-medium text-gray-900">Course Name: </label>
                <input id="computer-name" name="computer-name" value="" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >

            </div>

            <div class="mb-6">
                <label for="computer-origin" class="block mb-2 text-lg font-medium text-gray-900">Computer Origin:</label>
                <input id="computer-origin" name="computer-origin" value="" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">

            </div>

            <div class="mb-6">
                <label for="computer-price" class="block mb-2 text-lg font-medium text-gray-900">Computer Price:</label>
                <input id="computer-price" name="computer-price" value="" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-topbar dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">

            </div>
            <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
        </form>
    </div>

</x-admin-layout>
