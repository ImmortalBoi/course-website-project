@section('frontTitle','Login To Course Forum')
<x-guest-layout>

    <x-slot name="logo">

    </x-slot>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="Back">
                                        <button name="BackBtn" type="button" style="color: white;
                                        padding: 8px 20px;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        display: inline-block; font-size: 16px; float: right; border-radius: 8px; background-color: black;" onclick="history.back()">Back</button>
                                    </div>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fa fa-book-reader fa-2x me-3" style="color:blue;"></i>
                                            <span class="h1 fw-bold mb-0">Course Forum</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <x-text-input id="email" class="form-control form-control-lg"
                                                type="email" name="email" :value="old('email')" required autofocus />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <x-text-input id="password" class="form-control form-control-lg"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="block mt-4 flex justify-between">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                            @if (Route::has('password.request'))
                                                <a class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block text-black" type="submit"
                                                name="submit">Login</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="{{ route('register') }}" style="color: #393f81;">Register here</a>
                                        </p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
