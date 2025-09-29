@extends('admin.layout')

@section('content')
<h2>Edit Product</h2>
<form method="POST" action="{{ route('admin.products.update',$product->id) }}">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
    </div>
    <button class="btn btn-success">Update</button>
</form>
@endsection
