@section('frontTitle','Register To Course Forum')
<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 md:px-12 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container mx-auto sm:px-4">
                <div class="flex flex-wrap  gx-lg-5 items-center">
                    <div class="lg:w-1/2 pr-4 pl-4 mb-5 lg:mb-0">
                        <h1 class="my-5 text-3xl fw-bold ls-tight">
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

                    <div class="lg:w-1/2 pr-4 pl-4 mb-5 lg:mb-0">
                        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                            <div class="flex-auto p-6 py-5 md:px-12">
                                <div class="Back">
                                    <button name="BackBtn" type="button" style="color: white;
                                    padding: 8px 20px;
                                    border: none;
                                    border-radius: 4px;
                                    cursor: pointer;
                                    display: inline-block; font-size: 16px; float: left; border-radius: 8px; background-color: black;" onclick="history.back()">Back</button>
                                </div>
                                <br><br><br><br>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="flex flex-wrap ">
                                        <div class="md:w-full pr-4 pl-4 mb-4">
                                            <div class="form-outline">
                                                <x-text-input id="name" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text"
                                                    name="name" :value="old('name')" required autofocus />
                                                <label class="form-label" for="form3Example1">Username</label>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <x-text-input id="email" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="email" name="email"
                                            :value="old('email')" required />
                                        <label class="form-label" for="form3Example3">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <x-text-input id="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="password"
                                            name="password" required autocomplete="new-password" />
                                        <label class="form-label" for="form3Example4">Password</label>
                                    </div>

                                    <!--Confirm Password input -->
                                    <div class="form-outline mb-4">
                                        <x-text-input id="password_confirmation" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="password"
                                            name="password_confirmation" required />
                                        <label class="form-label" for="form3Example4">Confirm Password</label>
                                    </div>

                                    <!--Already Registered -->
                                    <div class="relative block mb-2 flex justify-center mb-4">
                                        <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent mx-1" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" name="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 block w-full mb-4">
                                        Sign up
                                    </button>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>or sign up with:</p>
                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent btn-floating mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent btn-floating mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent btn-floating mx-1">
                                            <i class="fab fa-github"></i>
                                        </button>

                                    </div>
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

