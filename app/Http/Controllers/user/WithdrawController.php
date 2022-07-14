<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.withdraw.index');
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
            'amount' => 'required|numeric|min:10',
            'method' => 'required|string',
            'title' => 'required|string',
            'number' => 'required|',
            'note' => 'nullable|string',
        ]);

        // checking if balance is enough
        if ($validatedData['amount'] > balance(auth()->user()->id)) {
            return redirect()->back()->withErrors('Your balance is not enough');
        }

        $withdraw = auth()->user()->withdraws()->create([
            'amount' => $validatedData['amount'],
            'method' => $validatedData['method'],
            'title' => $validatedData['title'],
            'number' => $validatedData['number'],
            'note' => $validatedData['note'],
        ]);


        $transaction = auth()->user()->transactions()->create([
            'amount' => $validatedData['amount'],
            'type' => 'withdraw',
            'status' => false,
            'sum' => 'out',
            'referrence' => $withdraw->id,
        ]);



        return redirect()->back()->with('success', 'Withdraw request has been sent');
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
