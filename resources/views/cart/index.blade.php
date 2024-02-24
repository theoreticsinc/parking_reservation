<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 100%;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: space-around;
        }

        .shopping-cart {
            width: 55%;
            margin: 20px;
        }

        .checkout-form {
            width: 35%;
            margin: 20px auto; /* Adjust the margin to center the form horizontally */
            margin-top: 150px; /* Add more margin to move the form lower */
        }

        .divider {
            border-right: 1px solid black; /* Vertical line style */
            height: 100%; /* Ensure the line extends the full height */
            position: absolute; /* Position the line absolutely */
            top: 0;
            left: calc(58% + 10px); /* Adjust the position based on the width of the shopping cart and margin */
            z-index: -1;
        }

        h1 {
            text-align: center;
            margin-top: 6px;
            color: white;

        }

        h2 {
            text-align: center;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #fff;
            border: none;
        }

        th:not(:first-child) { /* Hide all header cells except the first one */
            display: none;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }

        .total {
            text-align: right;
            margin-top: 10px;
        }

        .empty-cart {
            text-align: center;
            margin-top: 20px;
        }

        .shopping-cart {
            margin: 20px;
        }

        h1 {
            margin-bottom: 20px; /* Adjust the margin to create space between header and button */
        }

        .clear-cart {
            display: inline-block; /* Display as inline-block so it can be positioned with margins */
            margin-top: 45px; /* Adjust the margin to position the button below the header */
            margin-left: 700px; /* Adjust the margin to position the button to the right of the header */
            text-decoration: none;
            background-color: #f2f2f2; /* Light gray */
            color: red; /* Dark gray text */
            padding: 8px 16px; /* Adjust the padding here (8px top/bottom, 16px left/right) */
            border-radius: 20px; /* Rounded corners */
        }

        .clear-cart:hover {
            background-color: #f2f2f2;
            color: red;
        }

        form {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            display: block;
            margin: 0 auto;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .remove-link {
            color: red;
        }

        input[type="checkbox"] {
            transform: scale(1.5); /* Increase the size of the checkboxes */
            margin-right: 5px; /* Add some spacing between checkboxes and text */
        }

        .mark-all-label {
            display: inline-block;
            color: #9ba69f;
            vertical-align: middle;
            margin-right: 10px; /* Adjust the margin to your preference */
            margin-top: 10px; /* Add margin to adjust the vertical position */
        }

        .top-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 90px; /* Adjust the height as needed */
            background-color: #fa5738; /* Adjust the color as needed */
            z-index: -1; /* Push it behind other content */
        }
    </style>
</head>
<body>
<div class="divider"></div>
<div class="top-line"></div>

<div class="shopping-cart">
    <div class="cart-header">
        <h1>My Cart</h1>
        <a href="{{ route('cart.clear') }}" class="clear-cart"><i class="fas fa-trash-alt"></i> Clear Cart</a>
        <div>
        @if(session()->has('global_data'))
            <p>Global Data: {{ session('global_data') }}</p>
        @else
            <p>No Global Data in Session</p>
        @endif
        </div>
    </div>

    <!-- Success message and cart items table -->
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
    @php
        global $itemColor;
        $data1 = session('data1');
        $data2 = session('data2');
    @endphp    

    @if($cartItems && count($cartItems) > 0)
        <table>
            <thead>
            <tr>
                <th>
                    <input type="checkbox" id="select-all" class="mark-all-label" for="select-all"></label>
                    <label class="mark-all-label" for="select-all">Mark all</label>
                </th>
                <th style="display: none;"></th> <!-- Hide the rest of the header cells -->
                <th style="display: none;"></th>
                <th style="display: none;"></th>
                <th style="display: none;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>
                        <input type="checkbox" name="selected_product[]" value="{{ $item->rowId }}">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @php
                            $product = \App\Models\Product::find($item->id);
                            echo $product ? $product->description : 'Description not available';
                        @endphp
                    </td>
                    <td id="price_{{ $item->rowId }}">{{ $item->price }}</td>                    
                    <td>{{ $item->options->get('size') }}</td>
                    <td>{{ $item->options->get('color') }}</td>  
                    @php
                        $itemColor = $item->options->get('color');
                    @endphp
                    <td>
                        <a href="{{ route('cart.remove', $item->rowId) }}" class="remove-link"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><hr></td> <!-- Add a horizontal rule spanning all columns except the checkbox -->
                </tr>
            @endforeach
            </tbody>
        </table>

        <p class="total">Total: &#8369;{{ Cart::subtotal() }}</p>

    @else
        <p class="empty-cart">Your cart is empty.</p>
    @endif
</div>
<div class="checkout-form">
    <h2>Payment</h2>
    <form action="{{ route('createLinkfromPost') }}" method="POST" target="new">
        @csrf
        <input type="hidden" id="title" name="title" value="ParkNFly Payment">
        <input type="hidden" id="refNumber" name="refNumber" value={{ $itemColor !== null ? $itemColor : '' }}>
        <input type="text" id="amount" name="amount" value={{ Cart::subtotal() }}>
        <button type="submit">Proceed to Payment</button>
    </form>
    <h2>Checkout</h2>
    <form action="{{ route('home.index') }}" method="POST">
        @csrf

        <!-- Display total price of selected items -->
        <p>Subtotal: &#8369;<span id="selected_total_price">0.00</span></p>

        <button type="submit">Proceed to Checkout</button>
    </form>
</div>

<script>
    document.getElementById("select-all").addEventListener("change", function () {
        var checkboxes = document.getElementsByName("selected_product[]");
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
        }
        calculateTotalPrice();
    });

    function calculateTotalPrice() {
        var checkboxes = document.getElementsByName("selected_product[]");
        var totalPrice = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var rowId = checkboxes[i].value;
                var priceElement = document.getElementById("price_" + rowId);
                if (priceElement) {
                    totalPrice += parseFloat(priceElement.textContent);
                }
            }
        }
        document.getElementById("selected_total_price").textContent = totalPrice.toFixed(2);
    }

    var checkboxes = document.getElementsByName("selected_product[]");
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener("change", calculateTotalPrice);
    }

    function updateCheckoutForm() {
        // Get form data
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var address = document.getElementById('address').value;
        var phone = document.getElementById('phone').value;

        // Update checkout section with form data
        document.getElementById('checkout-name').textContent = name;
        document.getElementById('checkout-email').textContent = email;
        document.getElementById('checkout-address').textContent = address;
        document.getElementById('checkout-phone').textContent = phone;
    }

    // Add event listener to update the checkout form when the "Cart" button is clicked
    var cartButton = document.getElementById('cart-button');
    cartButton.addEventListener('click', updateCheckoutForm);
</script>

</body>
</html>
