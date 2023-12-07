<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
        }

        .product {
            border: 1px solid #ccc;
            margin-bottom: 1rem;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 1rem;
        }

        .cart-total {
            text-align: right;
            font-size: 1.2rem;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>

    <div class="container">
        <!-- Product List -->
        <div class="product">
            <img src="https://via.placeholder.com/100" alt="Product Image">
            <div>
                <h3>Product Name</h3>
                <p>Price: $10.99</p>
            </div>
            <button>Add to Cart</button>
        </div>

        <!-- total -->
        <div class="cart-total">
            <p>Total: $0.00</p>
            <button>Checkout</button>
        </div>
    </div>
</body>
</html>
