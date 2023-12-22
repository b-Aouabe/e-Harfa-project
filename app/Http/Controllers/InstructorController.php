<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class InstructorController extends Controller
{
    public function create () {
        return view('auth.instructor_register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'job' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'studyLevel' => ['required', 'string', 'max:255'],
            'fieldofstudy' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'min:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $instructor = Instructor::create([
            'user_id' => $user->id,
            'job' => $request->job,
            'address' => $request->address,
            'study_level' => $request->studyLevel,
            'field_of_study' => $request->fieldofstudy,
            'teaching_exp' => $request->experience,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
