<div>
    <div class="card custom-card">
        <div class="card-body">
            <div class="card-item">
                <div class="card-item-icon card-icon">
                    <i class="fa fa-{{ $icon }}  fs-20"></i>
                </div>
                <div class="card-item-title mb-2">
                    <label class="main-content-label tx-13 font-weight-bold mb-1">{{ $heading }}</label>
                    <span class="d-block tx-12 mb-0 text-muted">All Time</span>
                </div>
                <div class="card-item-body">
                    <div class="card-item-stat">
                        <h4 class="font-weight-bold">{{ $value }}</h4>
                        <small><b class="text-success">{{ now() }}</b></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
