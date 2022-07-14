@extends('layouts.dashboard')
@section('title', 'All Pending Withdrawals')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:user.all-pending-withdrawals/>
        </div>
    </div>
@endsection
