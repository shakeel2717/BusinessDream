@extends('layouts.dashboard')
@section('title', 'Add new Product')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">@yield('title')</h2>
                    <div class="card border border-primary p-3 mb-3 bg-primary">
                        <h3 class="mb-0">Current Balance: {{ env('APP_CURRENCY') }}
                            {{ number_format(balance(auth()->user()->id, 2)) }}</h3>
                    </div>
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-input name="title" label="Product Title" type="text" />
                        </div>
                        <div class="form-group">
                            <x-input name="price" label="Product Price" type="number" />
                        </div>
                        <div class="form-group">
                            <x-input name="picture" label="Product Picture" type="file" />
                        </div>
                        <div class="form-group">
                            <label for="description">Product Description:</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="3"
                                placeholder="Product Description"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
