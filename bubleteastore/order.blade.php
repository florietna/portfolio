<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Bubble Tea - Your Bubble Tea Place</title>

    <style>
        body {
            
            background-image: url('{{ asset("img/background2.jpeg") }}');
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0;
            overflow: hidden;
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
            color: #BE9551;
            margin-bottom: 1rem;
            -webkit-text-stroke: 3px #000;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            
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
            color:black;
        }
        button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body >
@include('post/header')
    
    <div class="content" >
        <h1>Build Your Bubble Tea Order</h1>

        <form action="" method="post" >
            @csrf

            <!-- Drink Selection -->
            <label for="drink">Select Your Drink:</label>
            <select name="drink" id="drink" required>
                <option value="bubble_tea">Bubble Tea</option>
                <option value="milk_tea">Milk Tea</option>
            </select>

            <!-- Topping Selection -->
            <label for="topping">Choose Your Topping:</label>
            <select name="topping" id="topping" required>
                <option value="pearls">Pearls</option>
                <option value="jelly">Jelly</option>
            </select>

            <!-- Sugar Quantity -->
            <!-- <label for="sugar">Choose Sugar Quantity:</label>
            <input type="number" name="sugar" id="sugar" min="0" max="100" placeholder="Enter sugar quantity (0-100)" required> -->
            <br>
            <!-- Order Button -->
            <button type="submit">Place Order</button>
            
        </form>
    </div>
</body>
</html>
