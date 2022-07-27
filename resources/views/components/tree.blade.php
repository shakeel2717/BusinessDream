<div class="row">
    <div class="col-12">
        <div class="first text-center">
            @if ($user != null && $user->status == true)
                <img src="{{ asset('assets/icon/user-success.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $user->id]) }}">
                        <p class="mb-0">{{ $user->email }}</p>
                        <p class="mb-0">{{ $user->name }}</p>
                        <p class="mt-0 text-{{ $user->status ? 'success' : 'danger' }}">
                            ({{ $user->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($user != null && $user->status == false)
                <img src="{{ asset('assets/icon/user-cross.png') }}" alt="" width="100">
                <div class="user-name mt-3">
                    <a href="{{ route('user.report.tree', ['user' => $user->id]) }}">
                        <p class="mb-0">{{ $user->email }}</p>
                        <p class="mb-0">{{ $user->name }}</p>
                        <p class="mt-0 text-{{ $user->status ? 'success' : 'danger' }}">
                            ({{ $user->status ? 'Active' : 'InActive' }})
                        </p>
                    </a>
                </div>
            @elseif ($user == null)
                <img src="{{ asset('assets/icon/user-add.png') }}" alt="" width="100">
            @endif
        </div>
    </div>
</div>