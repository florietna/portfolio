<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    <style>
      .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        border-style: solid;
        border-radius: 15px;

        margin-left: 400px;
        margin-right: 400px;
        margin-bottom: 20px;

        background-color: #F4BF96;
      }
      .scroll {
        overflow-y: scroll;

        background-image: url('{{ asset("img/background2.jpeg") }}');
        background-repeat: repeat;
        background-position: center top;
        background-attachment: fixed;
        margin: 0;
        font-family: 'Figtree', sans-serif;
        background-color: #fbd38d;
      }
      .order-pres {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
      }

      .picture {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;

        width: 200px;
        height: 200px;
        background-color: azure;
      }

      h3 {
        color: black;

      }

      h1 {
        margin-left: 50px;
        -webkit-text-stroke:2px #000;
      }

      .img {
        height: 120px;
        max-width: 100%;
        border-radius: 20px;
      }
    </style>
  </head>
  <body class="scroll">
    @include('post/header')
  <div class="history">
    <h1>Vos commandes :</h1>
    @foreach($orders as $order)
    <div class="order">
      @include('history/card')
    </div>
    @endforeach
  </div>
  </body>
</html>
