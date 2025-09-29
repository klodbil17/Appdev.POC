@extends('admin.layout')

@section('content')
<h2>Orders</h2>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th><th>Customer</th><th>Total</th><th>Status</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $o)
        <tr>
            <td>{{ $o->id }}</td>
            <td>{{ $o->customer_name }}</td>
            <td>₱{{ number_format($o->total,2) }}</td>
            <td>{{ ucfirst($o->status) }}</td>
            <td>
                <a href="{{ route('admin.orders.show',$o->id) }}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('admin.orders.edit',$o->id) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
