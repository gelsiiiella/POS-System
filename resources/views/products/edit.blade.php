<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <div class="container">
        <form action="{{ route('products.update', $products->product_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="sample">
                <label>Product ID</label>
                <input type="text" name="product_id" value="{{ $products->product_id}}"/>
                @error('product_id')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control" value="{{ $products->product_name}}"/>
                @error('product_name')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Price</label>
                <input type="text" name="product_price" class="form-control" value="{{ $products->product_price}}"/>
                @error('product_price')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Status</label>
                <select name="product_status" id="status">
                    <option value="status1" {{ $products->product_status == 'status1' ? 'selected' : '' }}>Status 1</option>
                    <option value="status2" {{ $products->product_status == 'status2' ? 'selected' : '' }}>Status 2</option>
                    <option value="status3" {{ $products->product_status == 'status3' ? 'selected' : '' }}>Status 3</option>
            </div>
            <div class="sample">
                <label>Image</label>
                <input type="file" name="product_image" accept="image/*" class="form-control" value="{{ $products->product_image}}">
                @error('product_image')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Purchase Time</label>
                <input type="datetime-local" name="timestamp"class="form-control" value="{{ $products->purchase_time}}">
            </div>
            <div class="sample">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </div>
</body>
</html>