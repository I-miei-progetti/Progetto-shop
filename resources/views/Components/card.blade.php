<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($car->img)}}" class="card-img-top cardimg" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$car->brand}}</h5>
      <p class="card-text">Modello: {{$car->name}}</p>
      <p class="card-text">Anno: {{$car->year}}</p>
      <p class="card-text">Prezzo: {{$car->price}}€</p>
      <a href="{{route('car.show',compact('car'))}}" class="btn btnSearch">Vedi il dettaglio</a>
    </div>
  </div>