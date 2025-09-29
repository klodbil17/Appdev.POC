@extends('admin.layout')

@section('content')
<h2>Order #{{ $order->id }}</h2>
<ul class="list-group mb-3">
    <li class="list-group-item"><strong>Customer:</strong> {{ $order->customer_name }}</li>
    <li class="list-group-item"><strong>Address:</strong> {{ $order->address }}</li>
    <li class="list-group-item"><strong>Phone:</strong> {{ $order->phone }}</li>
    <li class="list-group-item"><strong>Total:</strong> ₱{{ number_format($order->total,2) }}</li>
    <li class="list-group-item"><strong>Status:</strong> {{ ucfirst($order->status) }}</li>
</ul>
<a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back</a>
@endsection
