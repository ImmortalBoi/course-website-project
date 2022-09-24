<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
<x-guest-layout>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <section class="">
            <!-- Jumbotron -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
              <div class="container">
                <div class="row gx-lg-5 align-items-center">
                  <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                      The best offer <br />
                      <span class="text-primary">for your business</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                      quibusdam tempora at cupiditate quis eum maiores libero
                      veritatis? Dicta facilis sint aliquid ipsum atque?
                    </p>
                  </div>

                  <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                      <div class="card-body py-5 px-md-5">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                          <div class="row">
                            <div class="col-md-12 mb-4">
                              <div class="form-outline">
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                <label class="form-label" for="form3Example1">First name</label>
                              </div>
                            </div>

                          </div>

                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            <label class="form-label" for="form3Example3">Email address</label>
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                            <label class="form-label" for="form3Example4">Password</label>
                          </div>

                          <!--Confirm Password input -->
                          <div class="form-outline mb-4">
                            <x-text-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" required />
                            <label class="form-label" for="form3Example4">Password</label>
                          </div>

                          <!--Already Registered -->
                          <div class="form-check d-flex justify-content-center mb-4">
                            <a class="btn btn-link mx-1" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                            </a>
                          </div>

                          <!-- Submit button -->
                          <button type="submit" name="submit"  class="btn btn-primary btn-block mb-4">
                            Sign up
                          </button>

                          <!-- Register buttons -->
                          <div class="text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
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
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
