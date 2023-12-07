<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

</head>
    <body class="antialiased">
        <h1>TEST</h1>
        <h2> hello {{$username}}
            your password is {{$pswd}} <br>what you think it is scary? well maybe...
            oh and your email adresss is {{$email}}
        </h2>
    </body>
</html>