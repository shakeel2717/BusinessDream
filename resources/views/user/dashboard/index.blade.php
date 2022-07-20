@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ env('APP_CURRENCY') }}{{ number_format(balance(auth()->user()->id), 2) }}"
                icon="wallet" heading="TOTAL REVENUE" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state value="{{ $refers->count() > 20 ? '20+' : $refers->count() }}" icon="users"
                heading="TOTAL Referrals" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <x-card-state
                value="{{ number_format(auth()->user()->transactions->where('type', 'withdraw')->where('sum', false)->sum('amount'),2) }}"
                icon="wallet" heading="TOTAL PAYOUT" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card custom-card card-dashboard-calendar pb-0">
                <label class="main-content-label mb-2 pt-1">Recent transcations</label>
                <span class="d-block tx-12 mb-2 text-muted">All Kinds of Recent Funds transaction</span>
                <table class="table table-hover m-b-0 transcations mt-2">
                    <tbody>
                        @forelse (auth()->user()->transactions->take(5) as $transaction)
                            <tr>
                                <td class="wd-5p">
                                    <i
                                        class="fas fa-wallet fs-30 ms-2 text-{{ $transaction->sum == true ? 'success' : 'danger' }}">
                                </td>
                                <td>
                                    <div class="d-flex align-middle ms-3">
                                        <div class="d-inline-block">
                                            <h6 class="mb-1 text-uppercase">{{ $transaction->type }}</h6>
                                            <p class="mb-0 tx-13 text-muted">
                                                {{ $transaction->status ? 'Approved' : 'Pending' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="d-inline-block">
                                        <h6 class="mb-2 tx-15 font-weight-semibold">{{ env('APP_CURRENCY') }}
                                            {{ number_format($transaction->amount, 2) }}<i
                                                class="fas fa-level-up-alt ms-2 text-{{ $transaction->sum == true ? 'success' : 'danger' }} m-l-10"></i>
                                        </h6>
                                        <p class="mb-0 tx-11 text-muted">{{ $transaction->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">
                                    <img src="{{ asset('assets/icon/productivity.png') }}" class="my-3"
                                        alt="{{ env('APP_DESC') }}">
                                    <h6 class="mb-0 tx-13 text-muted">No Recent Transactions</h6>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="row row-sm">
                        <div class="col-6">
                            <div class="card-item-title">
                                <label class="main-content-label tx-13 font-weight-bold mb-2">Account Activation</label>
                                <span
                                    class="d-block tx-12 mb-0 text-{{ isActive(auth()->user()->id) ? 'muted' : 'danger' }}">{{ isActive(auth()->user()->id) ? 'Your Account is Active' : 'Your Account is Not yet Active' }}</span>
                            </div>
                            <p class="mb-0 tx-24 mt-2"><b class="text-primary">TID:{{ auth()->user()->tid->tid }}</b></p>
                            <a href="javascript:void(0)" class="text-muted">Tid Submit:
                                {{ auth()->user()->tid->created_at->diffForHumans() }} </a>
                        </div>
                        <div class="col-6">
                            <img src="../assets/icon/money-bag.png" alt="image" class="best-emp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <label class="main-content-label mb-0">My Refer link</label>
                    <div class="row mt-3 crypto-wallet">
                        <div class=" col-12 col-md-4 text-center">
                            <img src="{{ asset('assets/icon/refer.png') }}" alt="{{ env('APP_DESC') }}"
                                class="my-3">
                        </div>
                        <div class="col-12 col-md-8">
                            <p>Copy Your Refer Link .</p>
                            <hr>

                            <div class="input-group">
                                <input type="text" class="form-control input-lg" id="refer_link"
                                    value="{{ route('register', ['refer' => auth()->user()->username]) }}">
                                <div class="input-group-prepend">
                                    <button id="copyClipboard" class="clipboard-icon">COPY</button>
                                </div>
                            </div>
                            <div class="row row-sm px-4 mt-3">
                                {{-- <div class="col-lg-4 col-xl-4">
                                    <div class="card border custom-card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="crypto-icon bg-primary-transparent me-3 my-auto"><i
                                                        class="fe fe-arrow-down-left text-primary"></i></span>
                                                <div class="">
                                                    <p class="text-uppercase tx-13 text-muted mb-1">Left Members</p>
                                                    <h5 class="">{{ myLeftUsers(auth()->user()->id) }} <span
                                                            class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card border custom-card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="crypto-icon bg-primary-transparent me-3 my-auto">
                                                    <i class="fe fe-arrow-up-right text-primary"></i>
                                                </span>
                                                <div class="">
                                                    <p class="text-uppercase tx-13 text-muted mb-1">Right Members</p>
                                                    <h5 class="">{{ myRightUsers(auth()->user()->id) }} <span
                                                            class="tx-14 text-muted font-weight-normal ms-1">BTC</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card border custom-card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="crypto-icon bg-primary-transparent me-3 my-auto"><i
                                                        class="fas fa-wallet text-primary"></i></span>
                                                <div class="">
                                                    <p class="text-uppercase tx-13 text-muted mb-1">Total Members</p>
                                                    <h5 class="">
                                                        {{ totalRefers(auth()->user()->id)->count() }}
                                                        <span class="tx-14 text-muted font-weight-normal ms-1">BTC</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        // copyClipboard click and copy refer_link
        $('#copyClipboard').click(function() {
            var copyText = document.getElementById("refer_link");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
        });
    </script>
@endsection
