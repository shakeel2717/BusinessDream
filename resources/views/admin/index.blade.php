@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $users->count() }}" icon="users" heading="All Users" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $users->where('status', false)->count() }}" icon="users" heading="Pending Users" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $users->where('status', true)->count() }}" icon="users" heading="Active Users" />
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-3">
            <x-card-state value="{{ number_format($userPlan->sum('amount'), 2) }}" icon="wallet"
                heading="Total Investment" />
        </div>
        <div class="col-sm-12 col-md-3">
            <x-card-state value="{{ number_format($userPlan->where('status', false)->sum('amount'), 2) }}" icon="wallet"
                heading="Pending Investment" />
        </div>
        <div class="col-sm-12 col-md-3">
            <x-card-state value="{{ number_format($userPlan->where('status', 3)->sum('amount'), 2) }}" icon="wallet"
                heading="Suspend Investment" />
        </div>
        <div class="col-sm-12 col-md-3">
            <x-card-state value="{{ number_format($userPlan->where('status', true)->sum('amount'), 2) }}" icon="wallet"
                heading="Approved Investment" />
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $tids->count() }}" icon="cart-arrow-down" heading="All Tids" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $tids->where('status', false)->count() }}" icon="cart-arrow-down"
                heading="Pending Tids" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $tids->where('status', true)->count() }}" icon="cart-arrow-down"
                heading="Active Tids" />
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ number_format($withdraw->sum('amount'), 2) }}" icon="calendar-check-o" heading="Total Withdrawals" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ number_format($withdraw->where('status', false)->sum('amount'), 2) }}" icon="calendar-check-o"
                heading="Pending Withdrawals" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ number_format($withdraw->where('status',true)->sum('amount'), 2) }}" icon="calendar-check-o"
                heading="Active Withdrawals" />
        </div>
    </div>
@endsection
