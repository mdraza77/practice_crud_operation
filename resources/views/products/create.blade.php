<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <h2 class="mb-2 text-lg font-semibold text-black dark:text-black">Create Product</h2>
    <a href="{{ route('products.index') }}"><button
            class="text-white p-3 bg-blue-700 hover:bg-blue-800 m-2 border rounded-1xl">Back To Home</button></a>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="m-2">
            <input class="border" type="text" name="product_name" id="" placeholder="Enter Product Name">
            @error('product_name')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-2">
            <textarea name="product_details" id="" cols="30" class="border" placeholder="Enter Product Details"
                rows="1"></textarea>
            @error('product_details')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-2">
            <button class="border" type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
