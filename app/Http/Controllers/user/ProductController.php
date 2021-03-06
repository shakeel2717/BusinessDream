<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Product;
use App\Models\Method;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('status', true)->get();
        return view('user.product.index', compact('products'));
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
            'quantity' => 'required|numeric',
            'address' => 'required|string',
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $product = Product::find($validatedData['product_id']);

        if ($product->price * $validatedData['quantity'] > balance(auth()->user()->id)) {
            return redirect()->back()->withErrors('You don\'t have enough balance to buy this product');
        }

        $order = $product->orders()->create([
            'user_id' => auth()->user()->id,
            'quantity' => $validatedData['quantity'],
            'address' => $validatedData['address'],
            'amount' => $product->price * $validatedData['quantity'],
        ]);

        $transaction = auth()->user()->transactions()->create([
            'type' => 'shopping',
            'amount' => $product->price * $validatedData['quantity'],
            'refernce' => $order->id,
            'status' => true,
            'sum' => false,
            'note' => $product->title . " Product Purchased",
        ]);

        return redirect()->route('user.product.index')->with('success', 'Order placed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $methods = Method::where('status', true)->get();
        return view('user.product.show', compact('product','methods'));
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
