<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Bubble Tea - Your Bubble Tea Place</title>
    

    <style>
        .content {
            text-align: center;
            padding: 4rem;
            position: relative;
        }
        .order-button {
            background-color:#CE5A67 ;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1.5rem;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease-in-out;
            display: inline-block;
            margin-top: 1.5rem;
        }

        .order-button:hover {
            background-color: black;
        }

        /* Bubbles Animation */
        .bubble {
            position: absolute;
            background-color: #1F1717; 
            border-radius: 50%;
            animation: float 3s infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .bubble1 { top: 50%; left: 20%; width: 20px; height: 20px; animation-duration: 4s; }
        .bubble2 { top: 20%; left: 70%; width: 30px; height: 30px; animation-duration: 3s; }
        .bubble3 { top: 50%; left: 90%; width: 25px; height: 25px; animation-duration: 5s; }
        .bubble4 { top: 70%; left: 80%; width: 15px; height: 15px; animation-duration: 2s; }
        .bubble5 { top: 20%; left: 10%; width: 19px; height: 19px; animation-duration: 3s; }

    </style>
</head>
<body>
    @include('post/header')
    <div class="content">
        <h1>Craving Bubble Tea? Order Now!</h1>

        <a href="/order" class="order-button">Order Now!</a>

        <!-- Bubbles Animation -->
       
        <div class="bubble bubble1"></div>
        <div class="bubble bubble2"></div>
        <div class="bubble bubble3"></div>
        <div class="bubble bubble4"></div>
        <div class="bubble bubble5"></div>

    </div>
</body>
</html>
