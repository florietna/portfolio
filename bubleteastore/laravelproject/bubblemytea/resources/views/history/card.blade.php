<div class="card">
  <h2 class ="order-title">
    {{$order->product->name}} commandé le {{$order->created_at}}
  </h2>
  <div class="order-pres">
    <div class="orders-details">
      <p>Topping : {{$order->topping->name}}</p>
      <p> Volume : {{$order->volume->name}}</p>
      <p>Prix total : {{$order->price}}e</p>
    </div>
    <img class="img" src="img/{{$order->product->img_name}}.jpeg" alt="{{$order->product->img_name}}">
  </div>
  <p>{{$order->product->description}}</p>
</div>