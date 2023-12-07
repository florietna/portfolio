<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <style>
        form {
            text-align: center;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            padding: 12px;
            margin: 10px;
            width: 30%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #CE5A67;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.5rem;
            text-decoration: none;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: black;
        }

        a {
            color: #7d5c00;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            color: #CE5A67;
            background-color:#fff;
            margin-top: 15px;
            font-size :25px;
            margin-right:600px;
            margin-left :600px;
        }
        .no{
            color:#CE5A67;
            text-align: center;
        }

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
    </style>
</head>
<body class="antialiased">
@include('post/header')
    <!-- Login Form -->
    <form action="{{ route('welcome.login') }}" method="post">
        @csrf
        <input type="text" id="email" name="email" placeholder="Your email" value="{{ old('email') }}" required>
        @error('email')
                {{ $message }}
            @enderror
        <input type="password" id="pswd" name="password" placeholder="Your password" required>
        @error('password')
                {{ $message }}
            @enderror
        <button type="submit">Connect</button>
    </form>


    <!-- Sign Up Link -->
    <p class="no">No account yet? <a href="/signin">Sign up in only one click</a></p>
</body>
</html>
