@section('frontTitle','Register To Course Forum')
<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <section class="py-12 bg-lightblue dark:bg-darkblue">
        <!-- Jumbotron -->
        <div class="h-full px-4 py-5 md:px-12 text-center text-lg-start">
            <div class="container mx-auto sm:px-4">
                <div class="flex flex-row gx-lg-5 items-center">
                    <div class="lg:w-1/2 p-5 pb-9 mx-5 lg:mb-0 shadow-lg shadow-zinc-800 rounded bg-white dark:bg-zinc-900 hidden md:block">
                        <h1 class="my-5 text-3xl fw-bold ls-tight dark:text-white">
                            The best offer <br />
                            <span class="text-blue-600">for your business</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="lg:w-1/2 pr-4 pl-4 mx-auto mb-5 lg:mb-0">
                        <div class="dark:bg-zinc-900 shadow-lg shadow-zinc-800 relative flex flex-col min-w-0 rounded break-words bg-white">
                            <div class="flex-auto p-6 py-5 md:px-12">
                                <div class="flex flex-row justify-between">
                                    <div class="flex items-center mb-3 pb-1 text-lightblue" >
                                        <i class="fa fa-book-reader fa-2x me-3  "></i>
                                        <span class="text-3xl font-bold ml-2 mb-0">Course Forum</span>
                                    </div>

                                    <button name="BackBtn" type="button" class="text-gray-900 border border-gray-800 hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-1 text-center ml-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                    onclick="history.back()">Back</button>
                                </div>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Username input -->
                                    <div class="flex flex-col mb-4">
                                        <label class="pl-1 self-start mb-1 dark:text-white" for="form3Example1">Username</label>
                                        <input id="name" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text"
                                            name="name" :value="old('name')" required autofocus />
                                    </div>


                                    <!-- Email input -->
                                    <div class="flex flex-col mb-4 mb-4">
                                        <label class="pl-1 self-start mb-1 dark:text-white" for="form3Example3">Email address</label>
                                        <input id="email" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email"
                                            :value="old('email')" required />
                                    </div>

                                    <!-- Password input -->
                                    <div class="flex flex-col mb-4 mb-4">
                                        <label class="pl-1 self-start mb-1 dark:text-white" for="form3Example4">Password</label>
                                        <input id="password" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password"
                                        name="password" required autocomplete="new-password" />
                                    </div>

                                    <!--Confirm Password input -->
                                    <div class="flex flex-col mb-4 mb-4">
                                        <label class="pl-1 self-start mb-1 dark:text-white" for="form3Example4">Confirm Password</label>
                                        <input id="password_confirmation" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password"
                                            name="password_confirmation" required />
                                    </div>

                                    <!--Already Registered -->
                                    <div class="flex flex-col relative block mb-2 flex justify-center mb-4">
                                        <button type="submit" name="submit" class="block w-full text-xl dark:border shadow-md shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
                                            Sign up
                                        </button>
                                        <a class="self-end inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 leading-normal no-underline font-normal text-blue-700 bg-transparent mx-1" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div>

                                    <!-- Submit button -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
</x-guest-layout>
<!-- Section: Design Block -->

<!-- Section: Design Block -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

