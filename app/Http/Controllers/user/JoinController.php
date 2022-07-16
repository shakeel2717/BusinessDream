<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Tid;
use App\Models\User;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.join.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'position' => ['required', 'string', 'max:255'],
            'tid' => ['required', 'string', 'max:255', 'unique:tids,tid'],
            'password' => ['required', 'string', 'min:8'],
            'whatsapp' => ['required', 'string', 'min:8'],
        ]);

        // return generateReferLinksUser(auth()->user()->id, $request->position);

        // creating new user
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->refer = auth()->user()->username;
        // checking my position if free
        switch ($validatedData['position']) {
            case 'left':
                if (auth()->user()->left == "free") {
                    auth()->user()->left = $validatedData['username'];
                    auth()->user()->save();
                    $positionStatus = true;
                } else {
                    $positionStatus = false;
                }
                break;

            case 'right':
                if (auth()->user()->right == "free") {
                    auth()->user()->right = $validatedData['username'];
                    auth()->user()->save();
                    $positionStatus = true;
                } else {
                    $positionStatus = false;
                }
                break;

            default:
                return redirect()->back()->withErrors('Position is not valid');
                break;
        }
        // checking position
        if (!$positionStatus) {
            $freePosition = generateReferLinksUser(auth()->user()->id,$request->position);
            $position = $freePosition['position'];
            $userRefer = $freePosition['user'];
            if ($position == 'left') {
                $searchedUpliner = User::where('username', $userRefer)->first();
                $searchedUpliner->left = $validatedData['username'];
                $searchedUpliner->save();
            } else {
                $searchedUpliner = User::where('username', $userRefer)->first();
                $searchedUpliner->right = $validatedData['username'];
                $searchedUpliner->save();
            }
            auth()->user()->save();
            $user->refer = $userRefer;
            $positionStatus = true;
        }

        $user->password = bcrypt($validatedData['password']);
        $user->whatsapp = $validatedData['whatsapp'];
        if ($positionStatus) {
            $user->save();
        } else {
            return "No Free Position Found in Downline";
        }

        // creating new tid
        $tid = new Tid();
        $tid->tid = $validatedData['tid'];
        $tid->user_id = $user->id;
        $tid->save();

        return redirect()->route('user.dashboard.index')->with('success', 'User created successfully, Please wait for admin approval.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
