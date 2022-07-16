@extends('layouts.auth')
@section('title')
    Create new Account
@endsection
@section('form')
    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
        <div class="main-container container-fluid">
            <div class="row row-sm">
                <div class="card-body mt-2 mb-2">
                    <img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4"
                        alt="logo">
                    <div class="clearfix"></div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h5 class="text-start mb-2">Create new Account</h5>
                        <p class="mb-4 text-muted tx-13 ms-0 text-start">{{ env('APP_DESC') }}</p>
                        <x-input name="name" label="Enter Full Name" />
                        <x-input name="username" label="Type Username" />
                        <x-input name="email" type="email" label="Type Email" />
                        <x-input name="whatsapp" label="Your Whatsapp # Example: +92300XXXXXXX" />
                        <x-input name="password" type="password" label="Password" />
                        <x-input name="password_confirmation" type="password" label="Confirm Password" />
                        <br>
                        <a class="btn ripple btn-primary mb-3" data-bs-target="#scrollingmodal" data-bs-toggle="modal"
                            href="">Payment Methods</a>
                        <br>
                        <x-input name="tid" type="text" label="Payment Transaction ID" />

                        <button class="btn ripple btn-main-primary btn-block">Create Account</button>
                    </form>
                    <div class="text-start mt-5 ms-0">
                        <div class="mb-1"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                        <div>Already have an account? <a href="{{ route('login') }}">Login here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <!-- Scroll modal -->
    <div class="modal" id="scrollingmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Payment Methods</h6>
                                    <p class="text-muted card-sub-title">Send <b> {{ env('APP_CURRENCY') }}
                                        {{ number_format(option('fees'), 2) }} </b> Payment to this Address. and Copy the TID
                                        or Referrence Id.</p>
                                </div>
                                <div aria-multiselectable="true" class="accordion accordion-color mt-3" id="accordion2"
                                    role="tablist">
                                    @forelse ($methods as $method)
                                        <div class="card">
                                            <div class="card-header" id="heading" role="tab">
                                                <a aria-controls="collapseOne{{ $loop->iteration }}" aria-expanded="false"
                                                    data-bs-toggle="collapse" href="#collapseOne{{ $loop->iteration }}"
                                                    class="text-uppercase">{{ $method->type }}</a>
                                            </div>
                                            <div aria-labelledby="heading" class="collapse" data-bs-parent="#accordion2"
                                                id="collapseOne{{ $loop->iteration }}" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="table">
                                                        <table>
                                                            <tr>
                                                                <td>Name:{{ $method->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Account Number:{{ $method->number }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Account Title:{{ $method->title }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Recieving Number:{{ $method->r_number }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h2>No Method Found</h2>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Scroll modal -->
@endsection
