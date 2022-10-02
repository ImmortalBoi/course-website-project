@section('frontTitle','Edit '.$student->student_name.' Profile')
<x-student-layout>
    <div class="container mx-auto sm:px-4 rounded border shadow-xl bg-slate-150 w-3/4 mb-6 rounded-lg dark:bg-gray-800 dark:border-gray-700 mt-5 mb-5">
        <div class="flex flex-row ">
            <form action="{{Route('updateProfile',$student->id)}}" method="post" enctype= multipart/form-data>
                @csrf @method('PUT')
                <div class="">
                    <div class="flex flex-col items-center text-center p-6 py-5">
                            <img class="max-w-full h-40 w-40 mt-5"  src="{{Storage::url($student->student_img)}}" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                            <span class="font-bold m-2">{{$student->student_name}}</span>
                            <span class="">{{$student->student_email}}</span>
                            <span>
                                <input type="file" name="image" id="image" hidden/>
                                <label for="image" class="btn btn-primary m-2 dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700" >Upload Photo</label>
                            </span>
                            <span id="file-chosen">No file chosen</span>
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
                                <input type="text" name="name" id="name" class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Full Name" value="{{$student->student_name}}">
                            </div>
                        </div>
                        <div class="flex flex-wrap  mb-3 mt-3">
                            <div class="md:w-full pr-4 pl-4"><label class="labels">Phone Number</label><input type="text" name="phone"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Enter phone number" value="{{$student->student_phone_number}}"></div>
                            <div class="md:w-full pr-4 pl-4"><label class="labels">Address</label><input type="text"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="enter address"  value=""></div>
                            <div class="md:w-full pr-4 pl-4"><label class="labels">Email ID</label><input type="text" name="email" id="email"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="enter email id"  value="{{$student->student_email}}"></div>
                            <div class="md:w-full pr-4 pl-4"><label class="labels">Education</label><input type="text" name="education" id="education"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="education" value="{{$student->student_education}}"></div>
                        </div>
                        <div class="flex flex-wrap  mb-3 mt-3">
                            <div class="md:w-1/2 pr-4 pl-4"><label class="labels">Country</label><input type="text"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="country" value=""></div>
                            <div class="md:w-1/2 pr-4 pl-4"><label class="labels">State/Region</label><input type="text"
                                    class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center">
                            <button name="submit" class="dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700" >Submit</button>
                        </div>
                    </div>
                </div>
            </form>

            {{-- <div class="md:w-1/3 pr-4 pl-4">
                <div class="p-6 py-5">
                    <div class="flex justify-between items-center experience"><span>Edit
                            Experience</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="md:w-full pr-4 pl-4"><label class="labels">Experience in Designing</label><input type="text"
                            class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="experience" value=""></div> <br>
                    <div class="md:w-full pr-4 pl-4"><label class="labels">Additional Details</label><input type="text"
                            class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="additional details" value=""></div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
    </div>
</x-student-layout>
<script>
    const actualBtn = document.getElementById('image');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function(){
    fileChosen.textContent = this.files[0].name
})
</script>
