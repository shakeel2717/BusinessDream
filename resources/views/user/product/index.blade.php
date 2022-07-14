@extends('layouts.dashboard')
@section('title', 'All Deposits for Buy')
@section('content')
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-3">
                <div class="card custom-card">
                    <div class="p-2 ht-100p">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{ route('user.product.show',['product' => $product->id]) }}" class="image">
                                    <img class="pic-1" alt="product-image-1"
                                        src="{{ asset('products/') }}/{{ $product->picture }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="{{ route('user.product.show',['product' => $product->id]) }}">{{ $product->title }}</a></h3>
                                <p class="">{{ Str::words($product->description, 10, '...') }}</p>
                                <div class="price"><span class="text-danger">{{ env('APP_CURRENCY') }}
                                        {{ number_format($product->price, 2) }}</span>
                                </div>
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">No Products Found</h3>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
