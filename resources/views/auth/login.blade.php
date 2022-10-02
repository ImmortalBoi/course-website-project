@section('frontTitle','Login To Course Forum')
<x-guest-layout>

    <x-slot name="logo">

    </x-slot>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <section class="bg-lightblue dark:bg-darkblue ">
        <div class="dropshadow container h-full mx-auto sm:px-4 py-5 h-full flex flex-wrap flex justify-center items-center ">
                <div class="relative flex-grow max-w-full flex-1 px-4 xl:w-4/5 pr-4 pl-4">
                    <div class="relative flex flex-col min-w-0 rounded break-words bg-white drop-shadow-xl dark:bg-zinc-900 dark:text-white">
                        <div class="flex items-center g-0">
                            <div class="md:w-1/2 lg:w-2/5 hidden md:block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="max-w-auto h-[95vh]" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                                <div class="flex-auto p-6 p-6 lg:p-12 text-black">
                                    <div class="flex flex-row justify-between">
                                        <div class="flex items-center mb-3 pb-1 text-lightblue">
                                            <i class="fa fa-book-reader fa-2x me-3  "></i>
                                            <span class="text-3xl font-bold ml-2 mb-0">Course Forum</span>
                                        </div>

                                        <button name="BackBtn" type="button" class="text-gray-900 border border-gray-800 hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                                        onclick="history.back()">Back</button>
                                    </div>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <h5 class="fw-normal mb-3 pb-3 dark:text-white" style="letter-spacing: 1px;">
                                            Sign into your account</h5>

                                        <div class="mb-4 flex flex-col">
                                            <label class="mb-1 dark:text-white" for="form2Example17">Email address</label>
                                            <input id="email" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <div class="flex flex-col mb-4">
                                            <label class="mb-1 dark:text-white" for="form2Example27">Password</label>
                                            <input id="password" class="drop-shadow-xl bg-gray-50 border-2 border-gray-300 text-darkblue dark:text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>

                                        <div class="block mt-4 flex justify-between">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                            @if (Route::has('password.request'))
                                                <a class="dark:text-white cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="block w-full text-xl dark:border shadow-lg shadow-zinc-800 inline-block align-middle text-center select-none font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700" type="submit"
                                                name="submit">Login</button>
                                        </div>

                                        <p class="mb-5 lg:pb-2 text-gray-500 dark:text-white">Don't have an account? <a
                                                class="text-darkblue dark:text-lightblue dark:hover:text-sky-200"href="{{ route('register') }}">Register here</a>
                                        </p>
                                        <a href="#!" class="text-xs text-gray-700">Terms of use.</a>
                                        <a href="#!" class="text-xs text-gray-700">Privacy policy</a>
                                    </form>

                                </div>
                    </div>
                </div>
        </div>
    </section>

</x-guest-layout>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
