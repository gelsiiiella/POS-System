<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h1>List of Products</h1>
    <a href="{{ url('products/create')}}" class="btn btn-primary float-end"> Add Product </a>
   
    <table class="table table-bordered table-striped" style="border:2px">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th>Purchase Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{ $item->product_id }}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->product_price }}</td>
                <td>{{ $item->product_status }}</td>
                <td>
                    @if ($item->product_image)
                        <img src="{{ asset('storage/' . $item->product_image) }}" alt="{{ $item->product_name }}" width="50" height="50">
                    @endif
                </td>
                <td>{{ $item->purchase_time }}</td>
                <td>
                    <a href="{{route('products.edit', $item->product_id)}}" class="btn btn-success mx-2">Edit</a>
                     <form action="{{ route('products.destroy', $item->product_id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
