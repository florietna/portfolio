<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Bubble Tea - Your Bubble Tea Place</title>

    <style>
        body {
            overflow-y: scroll;

            background-image: url('{{ asset("img/background2.jpeg") }}');
            background-repeat: repeat;
            background-position: center top;
            background-attachment: fixed;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #fbd38d;
        }


        .content {
            text-align: center;
            padding: 4rem;
            position: relative;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #7d5c00;
            margin-bottom: 1rem;
            -webkit-text-stroke:2px #fcd6c9;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            border-style: solid;
            border-radius: 15px;

            margin-left: 500px;
            margin-right: 500px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            padding-top: 20px;

            background-color: #F4BF96;
        }

        select, input {
            margin-bottom: 1rem;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #ff5722;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1.5rem;
            text-decoration: none;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        label {
            color:#fff;
        }
        button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
@include('post/header')
    
    <div class="content">
        <h1>Build Your Bubble Tea Order</h1>

        <form action="/order" method="post">
            @csrf

            <!-- Drink Selection -->
            <label for="drink">Select Your Drink :</label>
            <select name="drink" id="drink" required>
                @foreach($products as $product)
                    <option value="{{$product->name}}">{{$product->name}}</option>
                @endforeach
            </select>

            <!-- Topping Selection -->
            <label for="topping">Choose Your Topping :</label>
            <select name="topping" id="topping" required>
                @foreach($toppings as $topping)
                    <option value="{{$topping->name}}">{{$topping->name}}</option>
                @endforeach
            </select>

            <!-- Volume -->
            <label for="volume">Choose volume :</label>
            <select name="volume" id="volume" required>
                @foreach($volumes as $volume)
                    <option value="{{$volume->name}}">{{$volume->name}}</option>
                @endforeach
            </select>

            <!-- Order Button -->
            <button type="submit">Place Order</button>
            
        </form>
    </div>
</body>
</html>
