<div class="card" style="width: 18rem;">
    <img src={{$storage:url($car->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$car->'brand'}}</h5>
      <p class="card-text">Modello: {{$car->'model'}}</p>
      <p class="card-text">Anno: {{$car->'year'}}</p>
    
      <p class="card-text text-muted">Prezzo {{$car->'price'}}€</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>