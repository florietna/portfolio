<!-- This header page is used for the nav bar/ logo to be used in all pages-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    body {
        margin: 0;
        overflow: hidden;
        font-family: 'Figtree',sans-serif;
        background-color: #F4BF96;
    }

    nav img {
        height: 90px;
        max-width: 100%;
        border-radius: 50%;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #CE5A67;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    nav a {
        color: #FCF5ED;
        text-decoration: none;
        font-weight: bold;
        margin-right: 2rem;
        transition: color 0.3s ease-in-out; 
    }
    div{
        color: #FCF5ED;
        text-decoration: none;
        font-weight: bold;
        margin-right: 2rem;
        transition: color 0.3s ease-in-out;
    }


    nav a:hover  {
        color: black;
        text-decoration: underline;
    }

    .icon {
        color: black;
    }

    .icon:hover {
        color: #fff;
    }

    h2 {
        color: #fff;
        border-style: solid;
        border-color: #fff;
        border-radius: 10px;

        padding: 10px;
    }
</style>

</head>
<body>
    <nav>
        <a href="/">
        <img src="img/logo.jpg" alt="logo">
        </a>
        <h2>BUBBLE MY TEA</h2>
        <div class="menu">
            <!--If the user is a guest-->
            @guest
            <a href="/login" class="nav-link">Login</a>
            <a href="/signin" class="nav-link">Signin</a>
            @endguest

            <!--If the user has logged in -->
            @auth
            <h3 class="user"> {{Illuminate\Support\Facades\Auth::user()->firstname}}</h3>
            <a href="/profile" class="nav-link">Profile</a>
            <a href="/history" class="nav-link">History</a>
            <a href="/order" class="nav-link">Order</a>
            <a href="/logout" class="nav-link">Logout</a>

            <!--If the user logs in as an admin-->
            @if (Illuminate\Support\Facades\Auth::user()->firstname === "root")
                    <a href="/admin/dashboard" class="nav-link">Admin</a>

            @endif
            
            @endauth
            <!--About and panier are displayed in any case-->
            <a href="/about" class="nav-link">About Us</a>
        </div>
    </nav>
</body>
</html>
