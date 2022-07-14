@extends('layouts.dashboard')
@section('title', 'My All Orders')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:user.all-orders/>
        </div>
    </div>
@endsection
