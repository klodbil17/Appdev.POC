@extends('admin.layout')

@section('content')
<h2>Product Details</h2>
<ul class="list-group">
    <li class="list-group-item"><strong>Name:</strong> {{ $product->name }}</li>
    <li class="list-group-item"><strong>Price:</strong> ₱{{ number_format($product->price,2) }}</li>
    <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
    <li class="list-group-item"><strong>Archived:</strong> {{ $product->is_archived ? 'Yes' : 'No' }}</li>
</ul>
<a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
