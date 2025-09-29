@extends('admin.layout')

@section('content')
<h2>Admin Dashboard</h2>

<div class="row">
    <!-- Total Products -->
    <div class="col-md-3">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5>Total Products</h5>
                <p class="fs-3">{{ $totalProducts }}</p>
            </div>
        </div>
    </div>

    <!-- Archived Products -->
    <div class="col-md-3">
        <div class="card text-bg-secondary mb-3">
            <div class="card-body">
                <h5>Archived Products</h5>
                <p class="fs-3">{{ $archivedProducts }}</p>
            </div>
        </div>
    </div>

    <!-- Pending Orders -->
    <div class="col-md-3">
        <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h5>Pending Orders</h5>
                <p class="fs-3">{{ $pendingOrders }}</p>
            </div>
        </div>
    </div>

    <!-- Delivered Orders -->
    <div class="col-md-3">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5>Delivered Orders</h5>
                <p class="fs-3">{{ $deliveredOrders }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
