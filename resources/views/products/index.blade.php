<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-500">

    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">All Products</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <a href="{{ route('products.create') }}"><button
                class="text-white p-3 bg-blue-700 hover:bg-blue-800 m-2 border rounded-1xl">Add New Product</button></a>
        @session('success')
            <span class="text-green-900">{{ $value }}</span>
        @endsession
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product details
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_details }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a class="border rounded bg-blue-600" href="{{route('products.show', $product->id)}}">View</a>
                            <a class="border rounded bg-green-600" href="{{route('products.edit', $product->id)}}">Edit</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
