@extends('layouts.dashboard')
@section('title', 'All Withdrawals')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:admin.pending-withdraw/>
        </div>
    </div>
@endsection
