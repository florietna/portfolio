<!-- this page is for modifying profile -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modify Profile</title>

    <style>
       .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            border-style: solid;
            border-radius: 15px;

            margin-left: 300px;
            margin-right: 400px;
            margin-bottom: 20px;
            margin-top: 20px;

            background-color: #F4BF96;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #7d5c00;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
        }

        label {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #7d5c00;
        }

        input {
            padding: 12px;
            margin: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff5722;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.5rem;
            text-decoration: none;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin-top: 20px;
        }

        button:hover {
            background-color: #e64a19;
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
<body>
    @include("post/header")
    <div class="content">
        <h1>Modify Your Profile</h1>

        <form action="#" method="post">
            @csrf

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Your username" value="{{Illuminate\Support\Facades\Auth::user()->firstname }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email" value="{{Illuminate\Support\Facades\Auth::user()->email }}" required>

            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" placeholder="New password" >
            @error('password')
            {{ $message }}
            @enderror
            <label for="password_confirmation">Confirm New Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password">


            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>
