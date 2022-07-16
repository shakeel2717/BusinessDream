@extends('layouts.dashboard')
@section('title', 'Join new User')
@section('content')

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.join.store') }}" method="POST">
                        @csrf
                        <x-input name="tid" label="Transaction ID" type="text" />
                        <x-input name="name" label="User Name" type="text" />
                        <x-input name="username" label="User Username" type="text" />
                        <x-input name="email" label="User Email" type="text" />
                        <x-input name="password" label="User Password" type="password" />
                        <x-input name="whatsapp" label="User Whatsapp" type="text" />
                        <div class="form-group">
                            <label for="">Select Position</label>
                            <select name="position" id="position" class="form-control">
                                <option value="">Select Left / Right</option>
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
