@extends('admin.layout')

@section('content')
<h2>Edit Order Status</h2>
<form method="POST" action="{{ route('admin.orders.update',$order->id) }}">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select">
            <option value="pending" {{ $order->status=='pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ $order->status=='confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="shipped" {{ $order->status=='shipped' ? 'selected' : '' }}>Shipped</option>
            <option value="delivered" {{ $order->status=='delivered' ? 'selected' : '' }}>Delivered</option>
        </select>
    </div>
    <button class="btn btn-success">Update</button>
</form>
@endsection
