@section('title','Create Course')
<x-admin-layout>

    <div>
        <form action="{{Route('admin.courses.store')}}" method="POST" enctype= multipart/form-data class="flex flex-col">
            @csrf
            {{-- ----------------------- --}}

            <div class="mb-6">
                <label for="active" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300" >Active: </label>
                <select name="active" id="active" class="form-select drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                @error('active')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Course Name: </label>

                <input id="name" name="name" value="{{old('name')}}" type="text" class="@error('name') is-invalid  @enderror drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                @error('name')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category_id" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Category:</label>
                <select name="category_id" id="category_id" class="form-select drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <option  selected value="" >{{'Choose The Category'}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->icategory_name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-600"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="instructor" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Instructor:</label>
                <select name="instructor_id" id="instructor_id" class="form-select drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-label="Default select example">
                    <option  selected value="" >Choose The Instructor</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->id}}">{{$instructor->instructor_name}}</option>
                    @endforeach
                </select>
                @error('instructor_id')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="lecture" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Lectures No. :</label>
                <input id="lecture" name="lecture" value="{{old('lecture')}}" type="text" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('lecture')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="duration" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Duration:</label>
                <input id="duration" name="duration" value="{{old('duration')}}" type="text" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('duration')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="level" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Skill Level:</label>
                <select id="level" name="level" class="form-select drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-label="Default select example">
                    <option selected value="" >Choose The Course Level</option>
                    <option value="All levels">All levels</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Expert">Expert</option>
                </select>
                @error('level')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="language" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Course Language:</label>
                <input id="language" name="language" value="{{old('language')}}" type="text" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('language')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Course Image:</label>
                <input id="image" name="image" type="file" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('image')
                        <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Course Price:</label>
                <input id="price" name="price" value="{{old('price')}}" type="text" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('price')
                <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-lg font-medium text-darkblue dark:text-gray-300">Course Description:</label>
                <textarea id="description" name="description" class="drop-shadow-2xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger py-2"> {{$message}}</p>
                @enderror
            </div>

            {{-- ------------------------- --}}

            <button type="submit" name="submit" class="self-end inline-block align-middle text-center select-none border-2 font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Submit</button>
        </form>
    </div>

</x-admin-layout>
