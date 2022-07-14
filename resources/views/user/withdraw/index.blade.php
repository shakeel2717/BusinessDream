@extends('layouts.dashboard')
@section('title', 'Withdraw Request')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">@yield('title')</h2>
                    <div class="card border border-primary p-3 mb-3 bg-primary">
                        <h3 class="mb-0">Current Balance: {{ env('APP_CURRENCY') }} {{ number_format(balance(auth()->user()->id,2)) }}</h3>
                    </div>
                    <form action="{{ route('user.withdraw.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <x-input name="amount" label="Amount" type="number" />
                        </div>
                        <div class="form-group">
                            <label for="method">Select Method</label>
                            <select name="method" id="method" class="form-control">
                                <option value="Bank">Bank</option>
                                <option value="Mobicash">Mobicash</option>
                                <option value="EasyPaisa">EasyPaisa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <x-input name="number" label="Account Number" type="text" />
                        </div>
                        <div class="form-group">
                            <x-input name="title" label="Account Title" type="text" />
                        </div>
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea name="note" class="form-control" id="note" cols="30" rows="3" placeholder="Type any Instructions, bank name etc."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
