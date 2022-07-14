<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{



    public function transactions()
    {
        return view('user.report.transactions');
    }


    public function deposit()
    {
        return view('user.report.deposit');
    }


    public function withdraw()
    {
        return view('user.report.withdraw');
    }


    public function withdrawPending()
    {
        return view('user.report.withdrawPending');
    }


    public function tids()
    {
        return view('user.report.tids');
    }


    public function plan()
    {
        return view('user.report.plans');
    }


    public function refers()
    {
        return view('user.report.refers');
    }


    public function orders()
    {
        return view('user.report.order');
    }

    public function tree($user = null)
    {
        if ($user != null) {
            $user = User::find($user);
        } else {
            $user = User::find(auth()->user()->id);
        }
        return view('user.report.tree', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
