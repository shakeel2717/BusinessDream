<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Method;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($refer = null)
    {
        $methods = Method::where('status', true)->get();
        // checking if this refer exists
        if ($refer != null) {
            $referDetail = User::where('username', $refer)->firstOrFail();
        }
        return view('auth.register', compact('methods', 'refer'));
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
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'refer' => ['nullable', 'string', 'max:255', 'exists:users,username'],
            'tid' => ['required', 'string', 'max:255', 'unique:tids,tid'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Refer System
        if ($request->refer == null) {
            $request->refer = 'default';
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'whatsapp' => $request->whatsapp,
            'refer' => $request->refer,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Auth::login($user);


        session(['register' => true]);

        $user->tid()->create([
            'tid' => $request->tid,
            'status' => false,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
