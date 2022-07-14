@extends('layouts.dashboard')
@section('title', 'All Transactions')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:user.all-transactions />
        </div>
    </div>
@endsection
