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
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($position = null, $refer = null)
    {
        $methods = Method::where('status', true)->get();
        // checking if this refer exists
        if ($refer != null) {
            $referDetail = User::where('username', $refer)->firstOrFail();
            // checking if this user position is free
            switch ($position) {
                case 'left':
                    if ($referDetail->left != "free") {
                        return 'This position is already taken.';
                    }
                    break;

                case 'right':
                    if ($referDetail->right != "free") {
                        return 'This position is already taken.';
                    }
                    break;

                default:
                    return 'This position is not valid.';
                    break;
            }
        }
        return view('auth.register', compact('methods', 'position', 'refer'));
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
            'position' => ['nullable', 'string', 'max:255'],
            'tid' => ['required', 'string', 'max:255', 'unique:tids,tid'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Refer System
        // checking if refer is not null
        if ($request->refer != null) {
            $referDetail = User::where('username', $request->refer)->firstOrFail();
            switch ($request->position) {
                case 'left':
                    // checking if this position is free
                    if ($referDetail->left != "free") {
                        return 'This position is already taken.';
                    } else {
                        $referDetail->left = $request->username;
                        $referDetail->save();
                    }
                    break;

                case 'right':
                    // checking if this position is free
                    if ($referDetail->right != "free") {
                        return 'This position is already taken.';
                    } else {
                        $referDetail->right = $request->username;
                        $referDetail->save();
                    }
                    break;

                default:
                    return 'This position is not valid.';
                    break;
            }
        }

        $referValidate = User::where('username', $request->refer)->get();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'whatsapp' => $request->whatsapp,
            'refer' => $referValidate ? 'default' : $request->refer,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $user->tid()->create([
            'tid' => $request->tid,
            'status' => true,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
