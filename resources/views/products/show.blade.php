<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>{{ $products->id }}</li>
        <li>{{ $products->product_name }}</li>
        <li>{{ $products->product_details }}</li>
        <li>{{ $products->created_at }}</li>
    </ul>
</body>

</html>
