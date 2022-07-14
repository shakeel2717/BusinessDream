@extends('layouts.dashboard')
@section('title', 'All Deposits')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:user.all-deposits/>
        </div>
    </div>
@endsection
