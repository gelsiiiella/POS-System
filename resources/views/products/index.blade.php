<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h1>List of Products</h1>

    <ul>
        @foreach($product as $product)
            <li>{{ $product->name }} - ${{ $product->price }} </li>
</ul>
</body>
</html>