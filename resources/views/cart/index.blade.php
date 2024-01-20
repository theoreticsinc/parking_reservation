@php
    use App\Models\Product;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

    <h1>Shopping Cart</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($cartItems && count($cartItems) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>
                            @if($item->model)
                                {{ $item->model->name }}
                            @else
                                Product not found
                            @endif
                        </td>
                        <td>{{ $item->qty }}</td>
                        <td>${{ $item->price }}</td>
                        <td>
                            <a href="{{ route('cart.remove', $item->rowId) }}">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total: ${{ Cart::subtotal() }}</p>

        <a href="{{ route('cart.clear') }}">Clear Cart</a>
    @else
        <p>Your cart is empty.</p>
    @endif

    <!-- Add more styling or structure as needed -->

</body>
</html>
