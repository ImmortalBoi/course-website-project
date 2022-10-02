<x-student-layout>
    <div class="container mx-auto sm:px-4 rounded border shadow-xl bg-slate-150 w-3/4 mb-6 rounded-lg dark:bg-gray-800 dark:border-gray-700 mt-5 mb-5">
        <div class="flex flex-row ">
            @foreach ($student as $stn)
            @section('frontTitle',$stn->student_name.' Profile')
            <div class="">
                <div class="flex flex-col items-center text-center p-6 py-5">
                    <img class="max-w-full h-auto w-full mt-5"
                        src="{{Storage::url($stn->student_img)}}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                        <span class="font-bold m-2">{{$stn->student_name}}</span>
                        <span class="">{{$stn->student_email}}</span>
                    </div>
            </div>

            <div class="">
                <div class="p-6 py-5">
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">


                        <div class="md:w-full pr-4 pl-4">
                            <label class="form-label">Name</label>
                            <input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Full Name" disabled value="{{$stn->student_name}}">
                        </div>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Phone Number</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="phone number" disabled value=""></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Address</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Address" disabled value=""></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Email ID</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Email" disabled value="{{$stn->student_email}}"></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Education</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Education" disabled value=""></div>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">
                        <div class="md:w-1/2 pr-4 pl-4"><label class="labels">Country</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Country" disabled value=""></div>
                        <div class="md:w-1/2 pr-4 pl-4"><label class="labels">State/Region</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" value="" disabled placeholder="State"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="{{Route('editProflie',$stn->id)}}" class="dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                            Edit Profile</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-student-layout>

