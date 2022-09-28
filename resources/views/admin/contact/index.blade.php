@section('title','Contact')
<x-admin-layout>
    @if($data)
            <form class="flex flex-wrap ">
            @foreach ($data as $dt)
            <div class="container mx-auto sm:px-4 border shadow-xl bg-slate-100 w-3/4 mb-6 rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label m-1">Name:</label>
                    <input type="text" class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="name" value="{{$dt->name}}" disabled>
                </div>

                <div class="mb-3 mt-3">
                <label for="inputEmail4" class="form-label">Email:</label>
                <input type="email" class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="inputEmail4" value="{{$dt->email}}" disabled>
                </div>

                <div class="mb-3 mt-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" id="subject" value="{{$dt->subject}}" disabled>
                </div>

                <div class="w-full mb-3 mt-3 h-full">
                <label for="inputAddress2" class="form-label">Message:</label>
                <textarea class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" disabled>{{$dt->message}}</textarea>
                </div>
            </div>
        @endforeach
            </form>

    @else
    <p>No Messages To Show</p>
    @endif



</x-admin-layout>
