@extends('layouts.dashboard')
@section('title', 'All Downline Tree')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card" style="overflow: scroll;">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.report.tree') }}">Go to Top</a>
                    </div>
                </div>
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
                                    @if ($user->id != auth()->user()->id)
                                    <p class="mb-0">Whatsapp:{{ $user->whatsapp }}</p>
                                    @endif
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
                        @foreach ($refers as $refer)
                        <x-tree :user="$refer" />
                        @endforeach
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection