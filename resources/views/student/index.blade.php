<x-student-layout>
    <div class="container mx-auto sm:px-4 rounded border shadow-xl bg-slate-150 w-3/4 mb-6 rounded-lg dark:bg-gray-800 dark:border-gray-700 mt-5 mb-5">
        <div class="flex flex-row ">

            <div class="">
                <div class="flex flex-col items-center text-center p-6 py-5">
                    <img class="max-w-full h-auto w-full mt-5"
                        src="asadasdsa" onerror="this.src='{{ URL::to('/') }}/img/no-background.jpg';">
                        <span
                        class="font-bold m-2">Name</span>
                        <span class="">email</span><span>
                    </span></div>
            </div>

            <div class="">
                <div class="p-6 py-5">
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">
                        <div class="md:w-1/2 pr-4 pl-4">
                            <label class="form-label">Name</label>
                            <input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="first name" value="">
                        </div>
                        <div class="md:w-1/2 pr-4 pl-4"><label class="labels">Surname</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" value="" placeholder="surname"></div>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Phone Number</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="enter phone number" value=""></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Address</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="enter address" value=""></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Email ID</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="enter email id" value=""></div>
                        <div class="md:w-full pr-4 pl-4"><label class="labels">Education</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="education" value=""></div>
                    </div>
                    <div class="flex flex-wrap  mb-3 mt-3">
                        <div class="md:w-1/2 pr-4 pl-4"><label class="labels">Country</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="country" value=""></div>
                        <div class="md:w-1/2 pr-4 pl-4"><label class="labels">State/Region</label><input type="text"
                                class="block shadow appearance-none w-full py-1 px-2 mt-1 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" value="" placeholder="state"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <button href="/edit" class="dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600  dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700" type="button">Edit Profile</button>
                    </div>
                </div>
            </div>


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
