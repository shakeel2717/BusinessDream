@extends('layouts.dashboard')
@section('title', 'All Downline Tree')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="overflow: scroll;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="first text-center">
                                @if ($user->status == true)
                                    <img src="{{ asset('assets/icon/user-success.png') }}" alt="" width="100">
                                @else
                                    <img src="{{ asset('assets/icon/user-cross.png') }}" alt="" width="100">
                                @endif
                                <div class="user-name mt-3">
                                    <a href="{{ route('user.report.tree', ['user' => $user->id]) }}">
                                        <p class="mb-0">{{ $user->email }}</p>
                                        <p class="mt-0 text-{{ $user->status ? 'success' : 'danger' }}">
                                            ({{ $user->status ? 'Active' : 'InActive' }})
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <x-tree :user="$user" />
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
