@extends('layouts.dashboard')
@section('title', 'Add Balance')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">@yield('title')</h2>
                    <form action="{{ route('admin.balance.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-input name="username" label="Username" type="text" />
                        </div>

                        <div class="form-group">
                            <x-input name="amount" label="Amount" type="number" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Add Balance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
