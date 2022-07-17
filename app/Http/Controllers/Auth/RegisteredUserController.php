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
        // checking if refer is not null
        if ($request->refer != null) {
            $referDetail = User::where('username', $request->refer)->firstOrFail();
            // getting free space
            if ($referDetail->left == 'free') {
                $referDetail->left = $request->username;
                $referDetail->save();
            } elseif ($referDetail->right == 'free') {
                $referDetail->right = $request->username;
                $referDetail->save();
            } else {
                // getting in downline user
                $downline = User::where('username', $referDetail->left)->first();
                findPosition:
                if ($downline->left == 'free') {
                    $downline->left = $request->username;
                    $request->refer = $downline->username;
                    $downline->save();
                } elseif ($downline->right == 'free') {
                    $downline->right = $request->username;
                    $request->refer = $downline->username;
                    $downline->save();
                } else {
                    // getting in downline user
                    $downlineRight = User::where('username', $referDetail->right)->first();
                    if ($downlineRight->left == 'free') {
                        $downlineRight->left = $request->username;
                        $request->refer = $downlineRight->username;
                        $downlineRight->save();
                    } elseif ($downlineRight->right == 'free') {
                        $downlineRight->right = $request->username;
                        $request->refer = $downlineRight->username;
                        $downlineRight->save();
                    } else {
                        $downline = User::where('username', $downline->left)->firstOrFail();
                        goto findPosition;
                    }
                }
            }
        } else {
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
