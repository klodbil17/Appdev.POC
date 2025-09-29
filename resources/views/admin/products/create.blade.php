@extends('admin.layout')

@section('content')
<h2>Add Product</h2>
<form method="POST" action="{{ route('admin.products.store') }}">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control">
    </div>
    <button class="btn btn-success">Save</button>
</form>
@endsection
