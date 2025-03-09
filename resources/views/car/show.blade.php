<x-layout>
    <title>Dettaglio</title>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
               <div class="col-6">
                <img src="{{storage::url($car->img)}}" alt="{{$car->name}}" class="img-fluid"> >
               </div>
               <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                <h5 class="card-title">{{$car->brand}}</h5>
                <p class="card-text">Modello: {{$car->model}}</p>
                <p class="card-text">Anno: {{$car->year}}</p>
              
                <p class="card-text text-muted">Prezzo {{$car->price}}€</p>
                <a href="{{route('car.index',compact('car'))}}" class="btn btn-primary">Torna in dietro</a>
               </div>
        </div>
    </div>
    <x-footer/>
</x-layout>