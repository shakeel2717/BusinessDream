@php
if ($user->left != 'free') {
    $leftUser = DB::table('users')
        ->where('username', $user->left)
        ->first();
} else {
    $leftUser = null;
}

if ($user->right != 'free') {
    $rightUser = DB::table('users')
        ->where('username', $user->right)
        ->first();
} else {
    $rightUser = null;
}
@endphp
<div class="row">
    <div class="col-6">
        <div class="first text-center">
            @if ($leftUser != null && $leftUser->status == true)
                <img src="{{ asset('assets/icon/user-success.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $leftUser->id]) }}">
                        <p class="mb-0">{{ $leftUser->email }}</p>
                        <p class="mb-0">{{ $leftUser->name }}</p>
                        <p class="mt-0 text-{{ $leftUser->status ? 'success' : 'danger' }}">
                            ({{ $leftUser->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($leftUser != null && $leftUser->status == false)
                <img src="{{ asset('assets/icon/user-cross.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $leftUser->id]) }}">
                        <p class="mb-0">{{ $leftUser->email }}</p>
                        <p class="mb-0">{{ $leftUser->name }}</p>
                        <p class="mt-0 text-{{ $leftUser->status ? 'success' : 'danger' }}">
                            ({{ $leftUser->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($leftUser == null)
                <img src="{{ asset('assets/icon/user-add.png') }}" alt="" width="100">
            @endif

        </div>
    </div>
    <div class="col-6">
        <div class="first text-center">
            @if ($rightUser != null && $rightUser->status == true)
                <img src="{{ asset('assets/icon/user-success.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $rightUser->id]) }}">
                        <p class="mb-0">{{ $rightUser->email }}</p>
                        <p class="mb-0">{{ $rightUser->name }}</p>
                        <p class="mt-0 text-{{ $rightUser->status ? 'success' : 'danger' }}">
                            ({{ $rightUser->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($rightUser != null && $rightUser->status == false)
                <img src="{{ asset('assets/icon/user-cross.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $rightUser->id]) }}">
                        <p class="mb-0">{{ $rightUser->email }}</p>
                        <p class="mb-0">{{ $rightUser->name }}</p>
                        <p class="mt-0 text-{{ $rightUser->status ? 'success' : 'danger' }}">
                            ({{ $rightUser->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($rightUser == null)
                <img src="{{ asset('assets/icon/user-add.png') }}" alt="" width="100">
            @endif

        </div>
    </div>
</div>
