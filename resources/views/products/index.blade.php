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
        <?php foreach ($product as $product): ?>
        <li> {{$product->product_name}}-${{$product->product_price}}</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>