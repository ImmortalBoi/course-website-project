<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Student::create([
        //     'student_name' => strip_tags($request->name),
        //     'student_email' => strip_tags($request->email),
        //     'student_password' => Hash::make(strip_tags($request->password)),
        // ]);

        $user = User::create([
            'name' =>strip_tags($request->name),
            'email' => strip_tags($request->email),
            'password' => Hash::make(strip_tags($request->password)),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'is_student'=>1,
        ]);


        event(new Registered($user));

        Auth::login($user);

        //return redirect()->route('st-store');
        return redirect(RouteServiceProvider::HOME);
    }
}
