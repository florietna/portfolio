<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <style>
        .contributors {
            margin-top: 1rem;
        }

        .social-icons {
            margin-top: 1rem;
        }

        .social-icons a {
            margin-right: 1rem;
            color: #333;
            text-decoration: none;
        }

        h1 {
            color: #fff;
        }
    </style>
</head>
<body>
    @include("post/header")
    <header>
        <h1>About Us</h1>
    </header>

    <div class="content">
        <p>Welcome to our website! This website was created as a group project using laravel and PHP.
        </p>

        <div class="contributors">
            <h2>Contributors</h2>
            <ul>
                <li>BRAUD Valentine </li>
                <li>DELGRANGE Florian </li>
                <li>EL BOUDOUTI Meryam </li>
                <li>CLAIN Brandon</li>
            </ul>
        </div>

        <div class="social-icons">
            <h2>Follow Us</h2>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

</body>
</html>
