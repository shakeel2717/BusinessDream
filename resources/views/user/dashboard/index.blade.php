@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="row mb-3">
        <h4 class="mb-3 ms-3">Email:{{ auth()->user()->email }}</h4>
        <h4 class="mb-3 ms-3">Whatsapp:{{ auth()->user()->whatsapp }}</h4>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ env('APP_CURRENCY') }}{{ number_format(balance(auth()->user()->id), 2) }}"
                icon="wallet" heading="TOTAL REVENUE" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ 0 }}" icon="users" heading="TOTAL Referrals" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state
                value="{{ number_format(auth()->user()->transactions->where('type', 'withdraw')->where('sum', false)->sum('amount'),2) }}"
                icon="wallet" heading="TOTAL PAYOUT" />
        </div>
    </div>
@endsection
