@extends('admin.layout')

@section('content')
<h2>Products</h2>
<a href="{{ route('admin.products.create') }}" class="btn btn-success mb-2">Add Product</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th><th>Price</th><th>Stock</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>₱{{ number_format($p->price,2) }}</td>
            <td>{{ $p->stock }}</td>
            <td>
            <a href="{{ route('admin.products.show',$p->id) }}" class="btn btn-primary btn-sm">View</a>
            <a href="{{ route('admin.products.edit',$p->id) }}" class="btn btn-warning btn-sm">Edit</a>

            @if(!$p->is_archived)
                <form action="{{ route('admin.products.archive',$p->id) }}" method="POST" class="d-inline">
                    @csrf @method('PUT')
                    <button class="btn btn-danger btn-sm">Archive</button>
                </form>
            @else
                <form action="{{ route('admin.products.restore',$p->id) }}" method="POST" class="d-inline">
                    @csrf @method('PUT')
                    <button class="btn btn-secondary btn-sm">Restore</button>
                </form>
            @endif
        </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
