@extends('layouts.dashboard')
@section('title', 'My Profile')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">@yield('title')</h2>
                    <form action="{{ route('user.profile.store') }}" method="POST">
                        @csrf
                        <x-input name="name" label="Full Name" type="text" value="{{ auth()->user()->name }}" />
                        <x-input name="whatsapp" label="Whatsapp Number" type="text"
                            value="{{ auth()->user()->whatsapp }}" />
                        <x-input name="username" label="Username" type="text" attribute="disabled"
                            value="{{ auth()->user()->username }}" />
                        <x-input name="email" label="Email" type="email" attribute="disabled"
                            value="{{ auth()->user()->email }}" />
                        <x-input name="upliner" label="Upliner" type="text" attribute="disabled"
                            value="{{ auth()->user()->refer }}" />
                        <x-input name="left" label="Left Member" type="text" attribute="disabled"
                            value="{{ auth()->user()->left }}" />
                        <x-input name="Right Member" label="Right Member" type="text" attribute="disabled"
                            value="{{ auth()->user()->right }}" />
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
