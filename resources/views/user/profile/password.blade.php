@extends('layouts.dashboard')
@section('title', 'Change Password')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">@yield('title')</h2>
                    <form action="{{ route('user.profile.password') }}" method="POST">
                        @csrf
                        <x-input name="cpassword" label="Current Password" type="password" />
                        <x-input name="password" label="New Password" type="password" />
                        <x-input name="password_confirmation" label="Confirm New Password" type="password" />
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
