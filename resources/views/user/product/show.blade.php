@extends('layouts.dashboard')
@section('title', 'All Deposits for Buy')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                    <div class="product-carousel">
                        <div id="carousel" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img
                                        src="{{ asset('products/') }}/{{ $product->picture }}" alt="img"
                                        class="img-fluid mx-auto d-block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mt-4 mb-4">
                <h4 class="mt-1 mb-3">{{ $product->title }}</h4>

                <p class="text-muted float-start me-3">
                    <span class="fe fe-star text-warning"></span>
                    <span class="fe fe-star text-warning"></span>
                    <span class="fe fe-star text-warning"></span>
                    <span class="fe fe-star text-warning"></span>
                    <span class="fe fe-star text-warning"></span>
                </p>
                <p class="text-muted mb-4">( {{ rand(0, 100) }} Customers Review )</p>
                <h6 class="text-success text-uppercase">20 % Off</h6>
                <h5 class="mb-2">Price : <span class="text-muted me-2"></span> <b>{{ env('APP_CURRENCY') }}
                        {{ number_format($product->price, 2) }}</b></h5>
                <p class="tx-13 text-muted">FREE SHIPPING on above Purchase of <b>1,00,000</b> </p>
                <h6 class="mt-4 fs-16">Description</h6>
                <p>{{ $product->description }}</p>
            </div>
            <form action="{{ route('user.product.store') }}" method="POST">
                @csrf
                <div class="d-flex mt-2">
                    <div class="mt-2 sizes">Quantity:</div>
                    <div class="d-flex ms-2">
                        <div class="form-group">
                            <select name="quantity" id="select-countries17" class="form-control select2  wd-150">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                    </div>
                </div>
                <div class="colors d-flex me-3 mt-2">
                    <div class="text-center mt-4 mb-4 btn-list">
                        <button type="submit" class="btn ripple btn-primary"><i class="fe fe-shopping-cart">
                            </i> Place Order</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
